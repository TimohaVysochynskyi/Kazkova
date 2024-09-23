/* eslint-disable react/no-unescaped-entities */
import { Formik, Form, Field, ErrorMessage } from "formik";
import * as Yup from "yup";
import { useId } from "react";
import toast, { Toaster } from "react-hot-toast";

import { createFeedback } from "../../feedbacks-api.js";

import css from "./FeedbackForm.module.css";

const FeedbackSchema = Yup.object().shape({
  name: Yup.string()
    .min(2, "Занадто коротке!")
    .max(50, "Занадто довге!")
    .required("Має бути заповненим"),
  feedback: Yup.string().required("Має бути заповненим"),
});

export default function FeedbackForm() {
  const id = useId();

  const handleSubmit = async (values, actions) => {
    try {
      // Send POST request
      await createFeedback(values.name, values.feedback);
      toast.success("Відгук додано!");
      actions.resetForm();
    } catch (error) {
      toast.error("Не вийшло надіслати відгук :(");
      console.error(error);
    }
  };

  return (
    <>
      <div className={css.container}>
        <Toaster
          containerStyle={{
            position: "relative",
          }}
          position="top-right"
          reverseOrder={false}
        />

        <Formik
          initialValues={{
            name: "",
            feedback: "",
          }}
          validationSchema={FeedbackSchema}
          onSubmit={handleSubmit}
        >
          <Form className={css.form}>
            <h2 className={css.title}>Залишити відгук</h2>
            <div className={css.group}>
              <label htmlFor={`${id}-name`} className={css.label}>
                Ім'я
              </label>
              <Field
                type="text"
                placeholder="Ваше ім'я"
                name="name"
                id={`${id}-name`}
                className={css.input}
              />
              <ErrorMessage
                name="name"
                component="span"
                className={css.error}
              ></ErrorMessage>
            </div>
            <div className={css.group}>
              <label htmlFor={`${id}-feedback`} className={css.label}>
                Відгук
              </label>
              <Field
                type="feedback"
                placeholder="Ваш відгук"
                name="feedback"
                id={`${id}-feedback`}
                className={css.input}
              />
              <ErrorMessage
                name="feedback"
                component="span"
                className={css.error}
              ></ErrorMessage>
            </div>
            <button className={css.btn} type="submit">
              Надіслати
            </button>
          </Form>
        </Formik>
      </div>
    </>
  );
}
