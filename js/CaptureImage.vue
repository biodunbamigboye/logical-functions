<template>
  <!--@author : Biodun Bamigboye--->
  <div id="container">
    <canvas ref="canvas" v-show="image"> </canvas>
    <!-- <img :src="image" v-if="image" /> -->
    <video autoplay="true" ref="video" v-show="!image"></video>

    <select class="form-control" v-model="selectedCamera" @change="start">
      <option value="">-- Select Camera Device --</option>
      <option v-for="(item, key) in devices" :key="key" :value="item.deviceId">
        {{ item.label }}
      </option>
    </select>

    <button @click="start" class="mt-1 btn btn-success rounded">
      Start Camera
    </button>
    <button @click="stop" class="mt-1 btn btn-danger rounded">
      Stop Camera
    </button>
    <button @click="capture" class="mt-1 btn btn-primary rounded">
      Capture Image
    </button>
  </div>
</template>
<script>
export default {
  name: "capture-image",
  refs: ["video", "canvas"],
  data() {
    return {
      devices: [],
      selectedCamera: "",
      image: null,
      width: 485,
      height: 360,
    };
  },
  mounted() {
    let cameraDevices = navigator.mediaDevices.enumerateDevices();
    cameraDevices.then((result) => (this.devices = result));
    console.log(cameraDevices);
  },
  methods: {
    start() {
      let video = this.$refs.video;
      this.image = null;
      if (navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices
          .getUserMedia({ video: { deviceId: this.selectedCamera } })
          .then(function (stream) {
            video.srcObject = stream;
          })
          .catch(function (error) {
            console.log("Something went wrong! " + error);
          });
      }
    },
    stop() {
      let video = this.$refs.video;

      var stream = video.srcObject;
      if (!stream) return console.log("No video stream Running");
      var tracks = stream.getTracks();

      if (tracks.length > 0)
        for (var i = 0; i < tracks.length; i++) {
          var track = tracks[i];
          track.stop();
        }

      video.srcObject = null;
    },
    capture() {
      let canvas = this.$refs.canvas;
      let video = this.$refs.video;
      var stream = video.srcObject;
      if (!stream) return console.log("No video stream Running");
      let context = canvas.getContext("2d");
      canvas.width = this.width;
      canvas.height = this.height;
      context.drawImage(video, 0, 0, this.width, this.height);
      const image = canvas.toDataURL("image/png");
      this.image = image;
    },
  },
};
</script>
<style scoped>
#container {
  margin: 0px auto;
  width: 500px;
  height: 375px;
  border: 10px #333 solid;
}
video {
  width: 485px;
  height: 360px;
  background-color: #666;
}
</style>
