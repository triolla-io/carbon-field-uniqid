/**
 * External dependencies.
 */
import { Component } from "@wordpress/element";

class UniqIDField extends Component {
  /**
   * Handles the change of the input.
   *
   * @param  {Object} e
   * @return {void}
   */
  handleChange = e => {
    const { id, onChange } = this.props;

    onChange(id, e.target.value);
  };

  randomHash() {
    return (
      Date.now().toString() +
      Math.random()
        .toString(36)
        .substr(2, 5)
    );
  }

  /**
   * Render a number input field.
   *
   * @return {Object}
   */
  render() {
    const { id, name, value, field } = this.props;
    const { handleChange } = this;

    return (
      <input
        type="hidden"
        id={id}
        name={name}
        value={field.value.length ? field.value : this.randomHash()}
        className="cf-uniqid__input"
        onChange={this.handleChange}
      />
    );
  }
}

export default UniqIDField;
