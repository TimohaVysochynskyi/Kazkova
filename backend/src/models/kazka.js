import mongoose from 'mongoose';

const kazkaSchema = new mongoose.Schema(
  {
    name: {
      type: String,
      required: true,
    },
    author: {
      type: String,
      required: true,
    },
    media: {
      type: String,
      required: true,
    },
    stars: {
      type: Array,
      required: true,
      default: [5],
    },
  },
  {
    timestamps: true,
    versionKey: false,
  },
);

export const KazkaCollection = mongoose.model('Kazka', kazkaSchema);
