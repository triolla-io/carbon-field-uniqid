/**
 * External dependencies.
 */
import { registerFieldType } from "@carbon-fields/core";

/**
 * Internal dependencies.
 */
import "./style.scss";
import UniqIDField from "./main";

registerFieldType("uniqid", UniqIDField);
