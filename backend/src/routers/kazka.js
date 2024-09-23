import { Router } from 'express';

import { ctrlWrapper } from '../utils/ctrlWrapper.js';
import { isValidId } from '../middlewares/isValidId.js';

import {
  getAllKazkaController,
  getKazkaByIdController,
} from '../controllers/kazka.js';

const router = Router();

router.get('/', ctrlWrapper(getAllKazkaController));
router.get('/:kazkaId', isValidId, ctrlWrapper(getKazkaByIdController));

export default router;
