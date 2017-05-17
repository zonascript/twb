(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.webFontTxtInst = {};
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [
		{name:"twb_atlas_", frames: [[0,0,1440,900],[433,1692,21,12],[324,1692,68,39],[394,1692,37,29],[0,1476,1440,122],[0,902,1440,268],[0,1692,156,123],[0,1600,1440,90],[0,1344,1440,130],[0,1172,1440,170],[236,1692,86,86],[0,1817,73,139],[158,1692,76,159],[75,1817,66,98]]}
];



lib.updateListCache = function (cacheList) {
	for(var i = 0; i < cacheList.length; i++) {
		if(cacheList[i].cacheCanvas)
			cacheList[i].updateCache();
	}
};

lib.addElementsToCache = function (textInst, cacheList) {
	var cur = textInst;
	while(cur != null && cur != exportRoot) {
		if(cacheList.indexOf(cur) != -1)
			break;
		cur = cur.parent;
	}
	if(cur != exportRoot) {
		var cur2 = textInst;
		var index = cacheList.indexOf(cur);
		while(cur2 != null && cur2 != cur) {
			cacheList.splice(index, 0, cur2);
			cur2 = cur2.parent;
			index++;
		}
	}
	else {
		cur = textInst;
		while(cur != null && cur != exportRoot) {
			cacheList.push(cur);
			cur = cur.parent;
		}
	}
};

lib.gfontAvailable = function(family, totalGoogleCount) {
	lib.properties.webfonts[family] = true;
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];
	for(var f = 0; f < txtInst.length; ++f)
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);

	loadedGoogleCount++;
	if(loadedGoogleCount == totalGoogleCount) {
		lib.updateListCache(gFontsUpdateCacheList);
	}
};

lib.tfontAvailable = function(family, totalTypekitCount) {
	lib.properties.webfonts[family] = true;
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];
	for(var f = 0; f < txtInst.length; ++f)
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);

	loadedTypekitCount++;
	if(loadedTypekitCount == totalTypekitCount) {
		lib.updateListCache(tFontsUpdateCacheList);
	}
};
// symbols:



(lib.bg = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.bird = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.cloud1 = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(2);
}).prototype = p = new cjs.Sprite();



(lib.cloud2 = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(3);
}).prototype = p = new cjs.Sprite();



(lib.ground1 = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(4);
}).prototype = p = new cjs.Sprite();



(lib.ground2 = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(5);
}).prototype = p = new cjs.Sprite();



(lib.house = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(6);
}).prototype = p = new cjs.Sprite();



(lib.jungle = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(7);
}).prototype = p = new cjs.Sprite();



(lib.mountain1 = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(8);
}).prototype = p = new cjs.Sprite();



(lib.mountain2 = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(9);
}).prototype = p = new cjs.Sprite();



(lib.sun = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(10);
}).prototype = p = new cjs.Sprite();



(lib.tree1 = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(11);
}).prototype = p = new cjs.Sprite();



(lib.tree2 = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(12);
}).prototype = p = new cjs.Sprite();



(lib.tree3 = function() {
	this.spriteSheet = ss["twb_atlas_"];
	this.gotoAndStop(13);
}).prototype = p = new cjs.Sprite();
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Symbol21 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.bird();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.476,0.475);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol21, new cjs.Rectangle(0,0,10,5.7), null);


(lib.Symbol20 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.bird();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.762,0.762);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol20, new cjs.Rectangle(0,0,16,9.2), null);


(lib.Symbol19 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.bird();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol19, new cjs.Rectangle(0,0,21,12), null);


(lib.Symbol18 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.bird();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.476,0.475);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol18, new cjs.Rectangle(0,0,10,5.7), null);


(lib.Symbol17 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.bird();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.762,0.762);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol17, new cjs.Rectangle(0,0,16,9.2), null);


(lib.Symbol16 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.bird();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol16, new cjs.Rectangle(0,0,21,12), null);


(lib.Symbol15 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.cloud2();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.595,0.595);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol15, new cjs.Rectangle(0,0,22,17.3), null);


(lib.Symbol14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.cloud2();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol14, new cjs.Rectangle(0,0,37,29), null);


(lib.Symbol13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.cloud1();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.853,0.853);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol13, new cjs.Rectangle(0,0,58,33.3), null);


(lib.Symbol12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.cloud1();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol12, new cjs.Rectangle(0,0,68,39), null);


(lib.Symbol11 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.sun();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol11, new cjs.Rectangle(0,0,86,86), null);


(lib.Symbol10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.tree2();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol10, new cjs.Rectangle(0,0,76,159), null);


(lib.Symbol9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.tree1();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol9, new cjs.Rectangle(0,0,73,139), null);


(lib.Symbol8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.tree1();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol8, new cjs.Rectangle(0,0,73,139), null);


(lib.Symbol7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.tree3();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol7, new cjs.Rectangle(0,0,66,98), null);


(lib.Symbol6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.house();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol6, new cjs.Rectangle(0,0,156,123), null);


(lib.Symbol5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.mountain2();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol5, new cjs.Rectangle(0,0,1440,170), null);


(lib.Symbol4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.mountain1();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol4, new cjs.Rectangle(0,0,1440,130), null);


(lib.Symbol3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.jungle();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol3, new cjs.Rectangle(0,0,1440,90), null);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.ground2();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol2, new cjs.Rectangle(0,0,1440,268), null);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.ground1();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(0,0,1440,122), null);


// stage content:
(lib.twb = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// ground1.png
	this.instance = new lib.Symbol1();
	this.instance.parent = this;
	this.instance.setTransform(720,939,1,1,0,0,0,720,61);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({y:927.9},0).wait(1).to({y:916.8},0).wait(1).to({y:905.7},0).wait(1).to({y:894.6},0).wait(1).to({y:883.4},0).wait(1).to({y:872.3},0).wait(1).to({y:861.2},0).wait(1).to({y:850.1},0).wait(1).to({y:839},0).wait(141));

	// tree2.png
	this.instance_1 = new lib.Symbol10();
	this.instance_1.parent = this;
	this.instance_1.setTransform(656,573.5,1,1,0,0,0,38,79.5);
	this.instance_1.alpha = 0;
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(64).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(76));

	// tree1.png
	this.instance_2 = new lib.Symbol9();
	this.instance_2.parent = this;
	this.instance_2.setTransform(373.5,581.5,1,1,0,0,0,36.5,69.5);
	this.instance_2.alpha = 0;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(59).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(81));

	// tree1.png
	this.instance_3 = new lib.Symbol8();
	this.instance_3.parent = this;
	this.instance_3.setTransform(1087.5,577.5,1,1,0,0,0,36.5,69.5);
	this.instance_3.alpha = 0;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(54).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(86));

	// tree3.png
	this.instance_4 = new lib.Symbol7();
	this.instance_4.parent = this;
	this.instance_4.setTransform(438,598,1,1,0,0,0,33,49);
	this.instance_4.alpha = 0;
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(49).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(91));

	// house.png
	this.instance_5 = new lib.Symbol6();
	this.instance_5.parent = this;
	this.instance_5.setTransform(842,607.5,1,1,0,0,0,78,61.5);
	this.instance_5.alpha = 0;
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(39).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(101));

	// ground2.png
	this.instance_6 = new lib.Symbol2();
	this.instance_6.parent = this;
	this.instance_6.setTransform(720,866,1,1,0,0,0,720,134);
	this.instance_6.alpha = 0;
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(9).to({_off:false},0).wait(1).to({y:852.1,alpha:0.1},0).wait(1).to({y:838.2,alpha:0.2},0).wait(1).to({y:824.3,alpha:0.3},0).wait(1).to({y:810.4,alpha:0.4},0).wait(1).to({y:796.5,alpha:0.5},0).wait(1).to({y:782.6,alpha:0.6},0).wait(1).to({y:768.7,alpha:0.7},0).wait(1).to({y:754.8,alpha:0.8},0).wait(1).to({y:740.9,alpha:0.9},0).wait(1).to({y:727,alpha:1},0).wait(131));

	// jungle.png
	this.instance_7 = new lib.Symbol3();
	this.instance_7.parent = this;
	this.instance_7.setTransform(720,621,1,1,0,0,0,720,45);
	this.instance_7.alpha = 0;
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(19).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(121));

	// mountain1.png
	this.instance_8 = new lib.Symbol4();
	this.instance_8.parent = this;
	this.instance_8.setTransform(720,604,1,1,0,0,0,720,65);
	this.instance_8.alpha = 0;
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(24).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(116));

	// mountain2.png
	this.instance_9 = new lib.Symbol5();
	this.instance_9.parent = this;
	this.instance_9.setTransform(720,542,1,1,0,0,0,720,85);
	this.instance_9.alpha = 0;
	this.instance_9._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(29).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(111));

	// bird.png
	this.instance_10 = new lib.Symbol21();
	this.instance_10.parent = this;
	this.instance_10.setTransform(1139,374.9,1,1,0,0,0,5,2.9);
	this.instance_10.alpha = 0;
	this.instance_10._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(74).to({_off:false},0).wait(1).to({regY:2.8,y:374.8,alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(66));

	// bird.png
	this.instance_11 = new lib.Symbol20();
	this.instance_11.parent = this;
	this.instance_11.setTransform(1115,373.5,1,1,0,0,0,8,4.5);
	this.instance_11.alpha = 0;
	this.instance_11._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_11).wait(74).to({_off:false},0).wait(1).to({regY:4.6,y:373.6,alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(66));

	// bird.png
	this.instance_12 = new lib.Symbol19();
	this.instance_12.parent = this;
	this.instance_12.setTransform(1131.5,389,1,1,0,0,0,10.5,6);
	this.instance_12.alpha = 0;
	this.instance_12._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_12).wait(74).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(66));

	// bird.png
	this.instance_13 = new lib.Symbol18();
	this.instance_13.parent = this;
	this.instance_13.setTransform(385,427.9,1,1,0,0,0,5,2.9);
	this.instance_13.alpha = 0;
	this.instance_13._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_13).wait(74).to({_off:false},0).wait(1).to({regY:2.8,y:427.8,alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(66));

	// bird.png
	this.instance_14 = new lib.Symbol17();
	this.instance_14.parent = this;
	this.instance_14.setTransform(361,426.5,1,1,0,0,0,8,4.5);
	this.instance_14.alpha = 0;
	this.instance_14._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_14).wait(74).to({_off:false},0).wait(1).to({regY:4.6,y:426.6,alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(66));

	// bird.png
	this.instance_15 = new lib.Symbol16();
	this.instance_15.parent = this;
	this.instance_15.setTransform(377.5,442,1,1,0,0,0,10.5,6);
	this.instance_15.alpha = 0;
	this.instance_15._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_15).wait(74).to({_off:false},0).wait(1).to({alpha:0.1},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0.3},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.5},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.7},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.9},0).wait(1).to({alpha:1},0).wait(66));

	// cloud2.png
	this.instance_16 = new lib.Symbol15();
	this.instance_16.parent = this;
	this.instance_16.setTransform(1055,439.6,1,1,0,0,0,11,8.6);
	this.instance_16.alpha = 0;
	this.instance_16._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_16).wait(99).to({_off:false},0).wait(1).to({x:1057,alpha:0.1},0).wait(1).to({x:1059,alpha:0.2},0).wait(1).to({x:1061,alpha:0.3},0).wait(1).to({x:1063,alpha:0.4},0).wait(1).to({x:1065,alpha:0.5},0).wait(1).to({x:1067,alpha:0.6},0).wait(1).to({x:1069,alpha:0.7},0).wait(1).to({x:1071,alpha:0.8},0).wait(1).to({x:1073,alpha:0.9},0).wait(1).to({x:1075,alpha:1},0).wait(41));

	// cloud2.png
	this.instance_17 = new lib.Symbol14();
	this.instance_17.parent = this;
	this.instance_17.setTransform(502.5,453.5,1,1,0,0,0,18.5,14.5);
	this.instance_17.alpha = 0;
	this.instance_17._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_17).wait(94).to({_off:false},0).wait(1).to({x:498.5,alpha:0.1},0).wait(1).to({x:494.5,alpha:0.2},0).wait(1).to({x:490.5,alpha:0.3},0).wait(1).to({x:486.5,alpha:0.4},0).wait(1).to({x:482.5,alpha:0.5},0).wait(1).to({x:478.5,alpha:0.6},0).wait(1).to({x:474.5,alpha:0.7},0).wait(1).to({x:470.5,alpha:0.8},0).wait(1).to({x:466.5,alpha:0.9},0).wait(1).to({x:462.5,alpha:1},0).wait(46));

	// cloud1.png
	this.instance_18 = new lib.Symbol13();
	this.instance_18.parent = this;
	this.instance_18.setTransform(1237,409.6,1,1,0,0,0,29,16.6);
	this.instance_18.alpha = 0;
	this.instance_18._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_18).wait(89).to({_off:false},0).wait(1).to({x:1233,alpha:0.1},0).wait(1).to({x:1229,alpha:0.2},0).wait(1).to({x:1225,alpha:0.3},0).wait(1).to({x:1221,alpha:0.4},0).wait(1).to({x:1217,alpha:0.5},0).wait(1).to({x:1213,alpha:0.6},0).wait(1).to({x:1209,alpha:0.7},0).wait(1).to({x:1205,alpha:0.8},0).wait(1).to({x:1201,alpha:0.9},0).wait(1).to({x:1197,alpha:1},0).wait(51));

	// cloud1.png
	this.instance_19 = new lib.Symbol12();
	this.instance_19.parent = this;
	this.instance_19.setTransform(205,399.5,1,1,0,0,0,34,19.5);
	this.instance_19.alpha = 0;
	this.instance_19._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_19).wait(84).to({_off:false},0).wait(1).to({x:209,alpha:0.1},0).wait(1).to({x:213,alpha:0.2},0).wait(1).to({x:217,alpha:0.3},0).wait(1).to({x:221,alpha:0.4},0).wait(1).to({x:225,alpha:0.5},0).wait(1).to({x:229,alpha:0.6},0).wait(1).to({x:233,alpha:0.7},0).wait(1).to({x:237,alpha:0.8},0).wait(1).to({x:241,alpha:0.9},0).wait(1).to({x:245,alpha:1},0).wait(56));

	// sun.png
	this.instance_20 = new lib.Symbol11();
	this.instance_20.parent = this;
	this.instance_20.setTransform(290,430,1,1,0,0,0,43,43);
	this.instance_20.alpha = 0;
	this.instance_20._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_20).wait(74).to({_off:false},0).wait(1).to({y:424,alpha:0.1},0).wait(1).to({y:418,alpha:0.2},0).wait(1).to({y:412,alpha:0.3},0).wait(1).to({y:406,alpha:0.4},0).wait(1).to({y:400,alpha:0.5},0).wait(1).to({y:394,alpha:0.6},0).wait(1).to({y:388,alpha:0.7},0).wait(1).to({y:382,alpha:0.8},0).wait(1).to({y:376,alpha:0.9},0).wait(1).to({y:370,alpha:1},0).wait(66));

	// bg.png
	this.instance_21 = new lib.bg();
	this.instance_21.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance_21).wait(150));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(720,450,1440,1000);
// library properties:
lib.properties = {
	width: 1440,
	height: 900,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	webfonts: {},
	manifest: [
		{src:"images/twb_atlas_.png", id:"twb_atlas_"}
	],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;
