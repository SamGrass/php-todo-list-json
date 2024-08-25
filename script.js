const { createApp } = Vue

  createApp({
    data() {
      return {
        apiUrl: 'server.php',
        ToDoList: [],
        message: 'ciao'
      }
    },
    methods: {
      getApi(){
        axios.get(this.apiUrl)
        .then( res => {
            this.ToDoList = res.data;
        })
      }
    },
    mounted() {
      this.getApi();
    }
  }).mount('#app')