import { getAllFeedbacks, addFeedback } from '../services/feedbacks.js';

// GET
export const getAllFeedbacksController = async (req, res, next) => {
  const feedbacks = await getAllFeedbacks();

  res.status(200).send({
    status: 200,
    message: 'Successfully found feedbacks!',
    data: feedbacks,
  });
};

// POST
export const addFeedbackController = async (req, res, next) => {
  const feedback = await addFeedback(req.body);

  res.status(201).send({
    status: 201,
    message: 'Successfully created a feedback!',
    data: feedback,
  });
};
