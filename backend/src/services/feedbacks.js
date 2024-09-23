import { FeedbackCollection } from '../models/feedbacks.js';

export const getAllFeedbacks = async () => {
  const feedbacks = await FeedbackCollection.find();

  return feedbacks;
};

export const addFeedback = async (payload) => {
  const feedback = await FeedbackCollection.create(payload);

  return feedback;
};
