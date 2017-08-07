@extends('duniamain.layout')

@section('page-level-styles')

@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="dm-main">
        <div class="uk-container">
            <div class="dm-box uk-text-center uk-margin-large-bottom">
                <img src="{!! asset('images/duniamain/icon-2.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-2" style="top:180px;right:-20px;">
                <img src="{!! asset('images/duniamain/icon-3.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-3" style="top: 250px;">

                <div class="uk-flex uk-flex-middle" uk-grid>
                    <div class="uk-width-auto dm-user">
                        <div class="dm-img-user">
                            @if (isset($detail->avatar) && $detail->avatar != '')
                                <img class="uk-border-circle" src="{!! $detail->avatar !!}" width="175" height="175" alt="{!! $user->name !!}">
                            @else
                                <img class="uk-border-circle" src="https://s-media-cache-ak0.pinimg.com/736x/56/63/ba/5663ba440ee28f9bb5735972f1ef61fc--watermelon-baby-water-melon.jpg" width="175" height="175" alt="{!! $user->name !!}">
                            @endif
                        </div>
                    </div>
                    <div class="uk-width-expand uk-text-left">
                        <h5 class="white-text">{{ $user->name }}</h5>

                        <div class="uk-grid-collapse" uk-grid>
                            {{--<div class="uk-width-1-4">Nama Anak :</div>--}}
                            {{--<div class="uk-width-3-4">{{ $user->name }}</div>--}}
                            <div class="uk-width-1-4 uk-margin-small-bottom">Nama Ibu</div>
                            <div class="uk-width-3-4 uk-margin-small-bottom">: {!! isset($detail->mother_name) ? $detail->mother_name : '' !!}</div>
                            <div class="uk-width-1-4">Umur</div>
                            <div class="uk-width-3-4">: 27</div>
                            <div class="uk-width-1-4">Kelas</div>
                            <div class="uk-width-3-4">: {!! isset($detail->class_name) ? $detail->class_name : '' !!}</div>
                            <div class="uk-width-1-4 uk-margin-small-bottom">Sekolah</div>
                            <div class="uk-width-3-4 uk-margin-small-bottom">: {!! isset($detail->school_name) ? $detail->school_name : '' !!}</div>
                            <div class="uk-width-1-4">Alamat</div>
                            <div class="uk-width-3-4">: {!! isset($detail->address) ? $detail->address : '' !!}</div>
                            <div class="uk-width-1-1 uk-margin-small-top"><a href="javascript:;" class="uk-link update-profile dm-red-text" title="Lengkapi Data">Lengkapi Data</a></div>
                        </div>


                    </div>
                </div>

            </div>
            <h2 class="dm-badge">Album Foto</h2>
            <div class="uk-margin uk-text-center white-text">
                Koin Dunia Main TWB yang sudah kamu kumpulkan :
                <h3 class="uk-margin-remove white-text">{!! count($images) !!}/15 koin</h3>
            </div>
            <ul class="uk-child-width-1-5 uk-flex uk-flex-center uk-margin-large-bottom" uk-grid>
                @foreach($characters as $key => $character)
                    <li>
                        <div class="dm-album uk-text-center ">
                            <div class="">{!! $loop->iteration !!}. {!! $character !!}</div>
                            <div class="dm-album-img">
                                @if (isset($images[$key]))
                                    <div class="uk-background-cover" style="background-image:url({!! asset($images[$key][0]->file_path) !!})">
                                </div>
                                @else
                                    <div class="uk-background-cover">?</div>
                                @endif
                            </div>
                            @if($isMyPage)
                            <button class="uk-button uk-button-small dm-upload" data-type="{!! $key !!}"><span>Upload</span></button>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
            <p class="uk-text-center"><a href="" class="dm-round uk-button uk-button-primary dm-blue" title="Kembali"><span>Kembali</span></a></p>
        </div>
    </section>

    @include('duniamain.includes.profile-detail')

    @if($isMyPage)
        @include('duniamain.includes.upload-coin')
    @endif
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/jquery.form.min.js') !!}"></script>
    <script>
        $(document).ready(function() {
            $('.update-profile').on('click', function() {
                $(this).blur();
                UIkit.modal('#register-modal').show();
                cleanRegisterForm();
                $('#mother_name').focus();
            });

            $('.dm-upload').on('click', function() {
                $(this).blur();
                coinType = $(this).attr('data-type');
                $('#coin_type').val(coinType);
                UIkit.modal('#upload-coin-modal').show();
            });

            $("#file").change(function () {
                filePreview(this);
            });

            $('#upload-form').ajaxForm({
                beforeSubmit: function (data) {
                    clearUploadForm();
                },
                beforeSend: function( xhr ) {
                    $('body').prepend(pageLoader);
                },
                success: function(data) {
                    $('.twb-page-loader').remove();
                    UIkit.modal('#upload-coin-modal').hide();
                    location.reload();
                },
                error: function(data) {
                    $('.twb-page-loader').remove();
                    var obj = $.parseJSON(data.responseText);
                    printErrorMsg(obj);
                }
            });
        });

        function clearUploadForm() {
            $("#score").removeClass("uk-form-danger");
            $("#file").removeClass("uk-form-danger");
            $('#upload-errors').empty();
        }

        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image-preview').empty();
                    $('#image-preview').append('<img src="'+e.target.result+'" style="height:40vh;">');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function printErrorMsg(obj) {
            console.log(obj);
            var errors = '';
            if (obj.file) {
                if (obj.file.length > 0) {
                    $.each( obj.file, function( key, value ) {
                        errors += value + '<br/>';
                    })
                } else {
                    errors += obj.file + '<br/>';
                }
                $("#file").addClass("uk-form-danger");
                $('#file').focus();
            }
            if (obj.score) {
                $("#score").addClass("uk-form-danger");
                errors += obj.score + '<br/>';
                $('#score').focus();
            }
            if (errors != '') {
                $('#upload-errors').append('<div class="uk-alert-danger" uk-alert>' +
                    '<a class="uk-alert-close" uk-close></a>' +
                    '<p>'+errors+'</p>' +
                '</div>')
            }
        }

    </script>
@endsection
