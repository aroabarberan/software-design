import React from 'react'
import { withStyles } from '@material-ui/core/styles'
import PropTypes from 'prop-types'
import { IconButton, Typography } from '@material-ui/core';
import { Check, CheckBoxOutlineBlank, Delete } from "@material-ui/icons";

const Todo = ({ classes, id, title, done, onDelete, onToggleDone }) => (
  <div className={classes.root}>
    <Typography className={classes.text} variant='headline'>{id}. {title}</Typography>
    <IconButton onClick={onToggleDone}>
      {done ? (
        <Check />
      ) : (
        <CheckBoxOutlineBlank />
      )}
    </IconButton>
    <IconButton onClick={onDelete}>
      <Delete />
    </IconButton>
  </div>
)

const styles = theme => ({
  root: {
    display: 'flex',
    justifyContent: 'space-between',
    alignItems: 'center',
  },
  text: {
    flexGrow: 1,
  }
})

Todo.propTypes = {
  classes: PropTypes.object.isRequired,
}

export default withStyles(styles)(Todo)
