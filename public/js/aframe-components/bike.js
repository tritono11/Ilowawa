AFRAME.registerComponent('bike', {
  schema: {
      spawn : {type:'vec3', default : {x: 0, y: 0, z: -1}},
  },
  init: function () {
    var el = this.el;
    //this.data.spawn = el.object3D.position;
    this.listeners = {
        keydown: this.onKeyDown.bind(this),
        colliderHit : this.colliderHit.bind(this)
    };
    this.attachEventListeners(el);
    
  },
  update: function () {},
  tick: function () {},
  remove: function () {},
  pause: function () {},
  play: function () {},
  attachEventListeners : function(el){
      window.addEventListener('keydown', this.listeners.keydown, false);
  },
  onKeyDown : function(event){
    if (event.code =="KeyQ"){
        var el = this.el;
        el.object3D.updateMatrixWorld();
        // crea un entità Gift
        var elGift = document.createElement('a-sphere');
        elGift.object3D.matrix.setPosition(el.object3D.matrixWorld.getPosition());
        //console.log(elGift.object3D.position);
        elGift.setAttribute('scale', {x:0.1, y:0.1, z:0.1});
        elGift.setAttribute('gift', {speed:0.05});
        this.el.sceneEl.appendChild(elGift);
    }   
  },
  colliderHit : function(e){
      
  }
});