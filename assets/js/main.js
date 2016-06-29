var todos = [
  { text: 'Add some todos' },
  { text: 'Add some todos' }
]

new Vue({
  el: '#app',
  data: {
    newTodo: '',
    todos: todos
  },
  methods: {
    addTodo: function () {
      var text = this.newTodo.trim()
      if (text) {
        this.todos.push({ text: text })
        this.newTodo = ''
      }
    },
    removeTodo: function (index) {
      this.todos.splice(index, 1)
    }
  }
})

// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('552f6457d1d3aedb4b11', {
  encrypted: true
});

var channel = pusher.subscribe('test_channel');
  channel.bind('my_event', function(data) {
    alert(data.message);
    todos.push(
      {text: data.message}
    )
});
