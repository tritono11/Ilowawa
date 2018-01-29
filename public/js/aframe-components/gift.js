AFRAME.registerComponent('gift', {
  schema: {
    speed: { default: -0.4 }
  },

  tick: function () {
    this.el.object3D.translateZ(this.data.speed);
  }
});