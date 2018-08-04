const app = require('express')()
const cors = require('cors')
const bodyParser = require('body-parser')
const todoRouter = require('./todos/todoRouter')
const port = 3000

app.use(cors({
  origin: '*'
}))
app.use(bodyParser.json())
app.use(todoRouter.path, todoRouter.router)

app.get('/healthz', (req, res) => {
  res.send({
    status: 'ok'
  })
})

app.listen(port, () => {
  console.log(`Server listening on port ${port}`)
})
