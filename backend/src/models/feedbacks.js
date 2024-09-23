import mongoose from 'mongoose';

const feedbackSchema = new mongoose.Schema(
  {
    name: {
      type: String,
      required: true,
    },
    feedback: {
      type: String,
      required: true,
    },
  },
  {
    timestamps: true,
    versionKey: false,
  },
);

export const FeedbackCollection = mongoose.model('Feedback', feedbackSchema);
