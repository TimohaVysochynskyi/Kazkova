import { useState, useEffect } from "react";

import { getFeedbacks } from "../../feedbacks-api.js";

import Loader from "../../components/Loader/Loader";
import ErrorMessage from "../../components/ErrorMessage/ErrorMessage";
import FeedbackList from "../../components/FeedbackList/FeedbackList.jsx";

import css from "./FeedbackPage.module.css";

export default function FeedbackPage() {
  const [feedbacks, setFeedbacks] = useState([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(false);

  useEffect(() => {
    async function fetchFeedbacks() {
      try {
        setError(false);
        setLoading(true);
        const response = await getFeedbacks();
        setFeedbacks(response.data);
      } catch (error) {
        setError(true);
        console.error(error);
      } finally {
        setLoading(false);
      }
    }
    fetchFeedbacks();
  }, []);

  return (
    <>
      <main className={css.container}>
        {loading && <Loader />}
        {error && <ErrorMessage />}
        {feedbacks.length > 0 && <FeedbackList feedbacks={feedbacks} />}
      </main>
    </>
  );
}
