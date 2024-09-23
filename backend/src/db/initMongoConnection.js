import mongoose from 'mongoose';

export const initMongoConnection = async () => {
  try {
    const user = process.env.MONGODB_USER;
    const pass = process.env.MONGODB_PASSWORD;
    const url = process.env.MONGODB_URL;
    const db = process.env.MONGODB_DB;

    await mongoose.connect(
      `mongodb+srv://${user}:${pass}@${url}/${db}?retryWrites=true&w=majority&appName=Cluster0`,
    );

    console.log('Connected to MongoDB');
  } catch (error) {
    console.error(error);
    throw error;
  }
};
