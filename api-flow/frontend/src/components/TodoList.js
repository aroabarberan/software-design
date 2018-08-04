import React from 'react'
import { withStyles } from '@material-ui/core/styles'
import PropTypes from 'prop-types'
import { Paper, Divider } from "@material-ui/core";
import Todo from './Todo';

class TodoList extends React.Component {
  constructor() {
    super()
    this.state = {
      todos: []
    }
  }

  componentDidMount() {
    fetch('http://localhost:3000/todos')
      .then(res => res.json())
      .then(({ results }) => this.setState({ todos: results }))
  }

  onToggleDone(id) {
    return () => {
      const todo = this.state.todos.find(t => t.id === id)
      fetch(`http://localhost:3000/todos/${id}`, {
        method: 'PUT',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ done: !todo.done })
      })
        .then(res => res.json())
        .then(json => {
          if (json.status === 200) {
            this.setState((prevState) => {
              todo.done = !todo.done
              return {}
            })
          }
        })
    }
  }

  onDelete(id) {
    return () => {
      fetch(`http://localhost:3000/todos/${id}`, {
        method: 'DELETE'
      })
        .then(res => {
          if (res.status === 204) {
            this.setState((prevState) => ({
               todos: prevState.todos.filter(t => t.id !== id)
            }))
          }
        })
        .catch(() => console.log('Mama que error'))
    }
  }

  render() {
    return (
      <Paper className={this.props.classes.root}>
        {this.state.todos.map(t => (
          <Todo
            key={t.id}
            id={t.id}
            title={t.title}
            done={t.done}
            onDelete={this.onDelete(t.id)}
            onToggleDone={this.onToggleDone(t.id)}
          />
        ))}
      </Paper>
    )
  }
}

const styles = theme => ({
  root: {
    padding: '8px 16px',
  }
})

TodoList.propTypes = {
  classes: PropTypes.object.isRequired,
}

export default withStyles(styles)(TodoList)
