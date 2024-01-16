const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl : "./server.php",
      tempDisksList : []
    }
  },
  methods: {
    getDisksList(){
        axios.get(this.apiUrl)
        .then(resp => this.tempDisksList = resp.data)
        .catch(err => console.log(err));
    }
  },
  created() {
    this.getDisksList()
  },
}).mount('#app')