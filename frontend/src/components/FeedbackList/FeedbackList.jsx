import FeedbackCard from "../FeedbackCard/FeedbackCard";
import css from "./FeedbackList.module.css";

export default function FeedbackList({ feedbacks }) {
  return (
    <>
      <div className={css.container}>
        <ul className={css.list}>
          {feedbacks.map((feedbackItem) => (
            <li className={css.item} key={feedbackItem._id}>
              <FeedbackCard feedback={feedbackItem} />
            </li>
          ))}
        </ul>
      </div>
    </>
  );
}
