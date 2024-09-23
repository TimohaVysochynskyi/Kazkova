import { useState } from "react";

import css from "./DonationPage.module.css";

export default function DonationPage() {
  const [selectedAmount, setSelectedAmount] = useState(null);
  const [message, setMessage] = useState("");

  const handleDonation = (amount) => {
    setSelectedAmount(amount);
    setMessage(`Дякуємо за ваш донат у розмірі ${amount} грн!`);
  };

  return (
    <>
      <main className={css.container}>
        <h1 className={css.title}>Підтримайте нас!</h1>
        <p className={css.subtitle}>Виберіть суму для донату:</p>
        <div className={css.options}>
          <button onClick={() => handleDonation(50)} className={css.button}>
            50 грн
          </button>
          <button onClick={() => handleDonation(100)} className={css.button}>
            100 грн
          </button>
          <button onClick={() => handleDonation(200)} className={css.button}>
            200 грн
          </button>
        </div>
        {selectedAmount && <p className={css.message}>{message}</p>}
      </main>
    </>
  );
}
