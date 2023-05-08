const { createApp } = Vue;
createApp({
  data() {
    return {
      title: "Lista di cose da fare",
      todoList: [],
      apiUrl: "server.php",
      todoItem: "",
    };
  },
  methods: {
    readlist() {
      axios.get(this.apiUrl).then((res) => {
        console.log(res.data);
        this.todoList = res.data;
      });
    },
    updateList() {
      console.log(this.todoItem);
      const data = {
        todoItem: this.todoItem,
      };
      axios
        .post(this.apiUrl, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((res) => {
          console.log(res);
          this.todoList = res.data;
          this.todoItem = "";
        });
    },
    deleteItem(index) {
      this.todoList.splice(index, 1);
    },
    completedAction(index) {
      this.todoList[index].done = !this.todoList[index].done;
    },
  },
  mounted() {
    this.readlist();
  },
}).mount("#app");
