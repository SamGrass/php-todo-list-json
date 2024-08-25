const { createApp } = Vue

  createApp({
    data() {
      return {
        apiUrl: 'server.php',
        ToDoList: [],
        NewTask: '',
        TaskDsc: '',
        TaskStatus: false,
      }
    },
    methods: {
      getApi(){
        axios.get(this.apiUrl)
        .then( res => {
            this.ToDoList = res.data;
        })
      },
      AddTask(){
        const data = {
            name: this.NewTask,
            status: this.TaskStatus,
            info: this.TaskDsc
        }
        axios.post(this.apiUrl, data, {
            headers: {'Content-Type': 'multipart/form-data'}
        })
            .then(res => 
                this.ToDoList = res.data,
                this.NewTask = '',
                this.TaskDsc = '',
            )
      }
    },
    mounted() {
      this.getApi();
    }
  }).mount('#app')