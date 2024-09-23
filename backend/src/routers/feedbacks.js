import { Router } from 'express';

import { ctrlWrapper } from '../utils/ctrlWrapper.js';
import { validateBody } from '../middlewares/validateBody.js';

import {
  getAllFeedbacksController,
  addFeedbackController,
} from '../controllers/feedbacks.js';
import { addFeedbackSchema } from '../validation/feedbacks.js';

const router = Router();

router.get('/', ctrlWrapper(getAllFeedbacksController));

router.post(
  '/',
  validateBody(addFeedbackSchema),
  ctrlWrapper(addFeedbackController),
);

export default router;
