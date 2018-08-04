const express = require('express')
const router = express.Router()
const controller = require('./todoController')

const path = '/todos'

router.get('/', (req, res) => {
  const response = controller.getAll()
  res.status(response.status).send(response)
})

router.get('/:id', (req, res) => {
  const response = controller.get(req.params.id)
  res.status(response.status).send(response)
})

router.post('/', (req, res) => {
  const response = controller.create(req.body)
  res.status(response.status).send(response)
})

router.put('/:id', (req, res) => {
  const response = controller.update(req.params.id, req.body)
  res.status(response.status).send(response)
})

router.delete('/:id', (req, res) => {
  const response = controller.remove(req.params.id)
  res.status(response.status).send(response)
})

module.exports = { router, path }
