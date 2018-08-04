let id = 4
let todos = {
  1: {
    id: 1,
    title: 'Comprar huevos',
    done: false,
  },
  2: {
    id: 2,
    title: 'Montar a caballo',
    done: false,
  },
  3: {
    id: 3,
    title: 'Ir al cine',
    done: true,
  },
  4: {
    id: 4,
    title: 'Mojarse los pies',
    done: false,
  },
}

const createTodo = todo => {
  todo.id = ++id
  todo.done = false
  todos[id] = todo
  return todo
}

const removeTodo = id => {
  checkIDAndThrow(id)
  delete todos[id]
}

const updateTodo = (id, newTodo) => {
  checkIDAndThrow(id)
  todos[id] = { ...todos[id], ...newTodo }
  return todos[id]
}

const readTodo = id => {
  checkIDAndThrow(id)
  return todos[id]
}

const readTodos = () => {
  return Object.keys(todos).map(id => todos[id])
}

const checkIDAndThrow = id => {
  if (!todos[id]) throw new Error(`Todo with id ${id} does not exists`)
}

module.exports = {
  createTodo,
  removeTodo,
  updateTodo,
  readTodo,
  readTodos,
}
