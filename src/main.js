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
        value={field.value.length ? field.value : randomHash()}
        className="cf-uniqid__input"
        onChange={this.handleChange}
      />
    );
  }
}

export default UniqIDField;
