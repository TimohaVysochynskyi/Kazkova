import { PiButterflyFill } from "react-icons/pi";

import css from "./KazkaStars.module.css";

export default function KazkaStars({ stars }) {
  const starNumber = stars.length;
  const starSum = stars.reduce(
    (accumulator, currentValue) => accumulator + currentValue,
    0,
  );

  const avarageStar = Math.floor(starSum / starNumber);

  return (
    <>
      <div className={css.container}>
        <div className={css.starWrapper}>
          {Array.from({ length: avarageStar }, (_, i) => (
            <PiButterflyFill key={i} className={css.star} />
          ))}
        </div>
      </div>
    </>
  );
}
