import css from "./ErrorMessage.module.css";

import errorImage from "/error-image.png";

export default function ErrorMessage() {
  return (
    <div className={css.container}>
      <img className={css.image} src={errorImage} alt="Something went wrong" />
      <p className={css.title}>Невідома помилка :(</p>
      <p className={css.description}>
        Перевірте інтернет з`єднання та спробуйте ще раз
      </p>
    </div>
  );
}
