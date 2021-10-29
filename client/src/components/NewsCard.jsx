import React from "react";
import Button from "./UI/button/Button";
import { Link } from "react-router-dom";

const Newscard = (props) => {
  return (
    <div className="contact__card">
      <div className="card__header">
        <h3>{props.card.title}</h3>
      </div>
      <div className="card__body">{props.card.body}</div>
      <div className="card__footer">
        <Button>
          <Link
            to="/"
            className="button__link"
          >
            {props.card.btnText}
          </Link>
        </Button>
      </div>
    </div>
  );
};

export default Newscard;
