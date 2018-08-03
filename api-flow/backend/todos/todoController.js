const service = require('./todoService')

const create = todo => {
  const res = {}
  if (!todo.title) {
    res.status = 400
    res.error = {
      message: 'Title cannot be empty'
    }
    return res
  }
  res.results = service.createTodo(todo)
  res.status = 201
  return res
}

const get = id => {
  const res = {}
  res.results = service.readTodo(id)
  res.status = 200
  return res
}

const getAll = () => {
  const res = {}
  res.results = service.readTodos()
  res.status = 200
  return res
}

const remove = id => {
  const res = {}
  try {
    service.removeTodo(id)
    res.status = 204
  } catch (err) {
    res.status = 404
  }
  return res
}

const update = (id, newTodo) => service.updateTodo(id, newTodo)

module.exports = {
  create, get, getAll, remove, update
}
