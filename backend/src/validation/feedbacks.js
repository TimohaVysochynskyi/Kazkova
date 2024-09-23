import Joi from 'joi';

export const addFeedbackSchema = Joi.object({
  name: Joi.string().min(3).max(50).required(),
  feedback: Joi.string().required(),
});
