import css from "./FeedbackCard.module.css";

export default function FeedbackCard({ feedback }) {
  return (
    <div className={css.container}>
      <p className={css.name}>{feedback.name}</p>
      <p className={css.feedback}>{feedback.feedback}</p>
    </div>
  );
}
