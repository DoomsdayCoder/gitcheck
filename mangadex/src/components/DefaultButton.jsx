import React, { useState } from 'react';
import '../index.css';
import { PropTypes } from 'prop-types';

export default function Button(props) {
  const [defClass, setClass] = useState(props.className || '')
  return (
    <button className={`py-2 bg-violet-600 text-gray-50 rounded-lg btn-primary
     ${defClass}`}  type={props.type} disabled={props.disabled}>{props.title}</button>
  )
}

Button.propTypes = {
  className : PropTypes.string,
  type: PropTypes.string,
  disabled: PropTypes.bool,
  title: PropTypes.string
}