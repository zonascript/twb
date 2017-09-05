<?php

namespace App\Service;


use App\Model\Coin as CoinModel;
use App\Model\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Coin
{
    use DatatableParameters;

    protected $baseUrl = '';

    public function coinDatatable($request)
    {
//        $data = $this->getParticipants();
//        // Log::warning(\GuzzleHttp\json_encode($request->all()));
//
//        if ($request->has('is_completed')) {
//            $data->has('coins', '>=', 15)
//                ->whereHas('coins', function($q) {
//                    $q->where('status', 1);
//                });
//        }

        $qStartDate = '';
        $qEndDate = '';
        $qStartBasic = '';
        $qEndBasic = '';

        if ($request->has('start_date')) {
            $qStartDate = "AND c.created_at >= '" . $request->start_date  . "'";
            $qStartBasic = "AND created_at >= '" . $request->start_date . "'";
        }

        if ($request->has('end_date')) {
            $qEndDate = "AND c.created_at <= '" . $request->end_date  . "'";
            $qEndBasic = "AND created_at <= '" . $request->end_date . "'";
        }

        $baseQuery = 'SELECT DISTINCT u.id, u.name, u.email,
                            (SELECT SUM(score) FROM coins WHERE user_id = u.id AND STATUS = 1 ' . $qStartBasic . $qEndBasic .') AS score_sum,
                            (SELECT COUNT(id) FROM coins WHERE user_id = u.id AND STATUS = 1 ' . $qStartBasic . $qEndBasic .') AS num_of_images
                        FROM users u JOIN coins c ON u.id = c.user_id
                        WHERE c.status = 1';

        // Log::warning($baseQuery);

        $qScore = '';
        if ($request->has('score_min')) {
            $qScore = " where i.score_sum >= " . $request->score_min;
        }

        if ($request->has('score_max')) {
            if ($qScore == '') {
                $qScore .= ' where ';
            } else {
                $qScore .= ' and ';
            }
            $qScore .= " i.score_sum <= " . $request->score_max;
        }

        $data = DB::select( DB::raw("SELECT * FROM (
                        " . $baseQuery . "
                            " . $qStartDate . "
                            " . $qEndDate . "
                    ) i " . $qScore )
                );


        // Log::warning(\GuzzleHttp\json_encode($data));
        $actions = [
            'detail' => [
                'title' => 'Details',
                'link' => backendUrl('participant-images/%s'),
                'class' => 'uk-label uk-text-capitalize green',
                'icon' => 'fa fa-fw fa-eye'
            ]
        ];
        return (new DatatableGenerator(collect($data)))
            ->addActions($actions)
            ->generate();
    }

    public function getParticipants()
    {
//        $userQuery = User::query()
//            ->join('user_details AS detail', 'detail.user_id', 'users.id')
//            ->leftJoin('model_has_roles AS mhr', 'mhr.model_id', 'users.id')
//            ->where('mhr.role_id', 8)
//            ->select('users.*', 'detail.*');
//        return $userQuery;
        return User::with('detail')
            ->whereHas('roles', function($q) {
                $q->where('id', 8);
            });
    }

    public function imageDatatable()
    {
        $data = $this->getImages()->get();
        $this->baseUrl = 'coins';
        $action = $this->actionParameters(['coins' => 'detail']);
        return (new DatatableGenerator($data))
            ->addActions($action)
            ->generate();
    }

    public function getImages()
    {
        $imageQuery = CoinModel::with('user.detail');
        return $imageQuery;
    }

    public function getImageById($id)
    {
        return CoinModel::find($id);
    }

    public function updateStatus($id, $status)
    {
        $image = CoinModel::find($id);
        $image->status = $status;
        $image->save();
    }

    public function getAllCoins()
    {
        return $this->getCoins();
    }

    public function getOpenCoins()
    {
        return $this->getCoins(['status' => 0]);
    }

    public function getApprovedCoins()
    {
        return $this->getCoins(['status' => 1]);
    }

    public function getRejectedCoins()
    {
        return $this->getCoins(['status' => 2]);
    }

    protected function getCoins($params = [])
    {
        $q = CoinModel::query();
        if (isset($params['status'])) {
            $q->where('status', $params['status']);
        }
        if (isset($params['user_id'])) {
            $q->where('user_id', $params['user_id']);
        }
        return $q;
    }

    public function participantImagesDatatable($userId)
    {
        $data = $this->getCoinsByUser($userId)->with('user.detail')->get();
        // Log::warning(\GuzzleHttp\json_encode($data));
        return (new DatatableGenerator($data))
            ->addColumn('image_date', function($data) {
                return $data->created_at->format('Y-m-d');
            })
            ->generate();
    }

    public function getCoinsByUser($userId)
    {
        return $this->getCoins(['user_id' => $userId]);
    }
}