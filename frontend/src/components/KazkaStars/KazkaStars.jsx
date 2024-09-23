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
        <p className={css.starNumber}>{avarageStar}/5</p>
        <div className={css.starWrapper}>
          <PiButterflyFill className={css.star} />
          <PiButterflyFill className={css.star} />
          <PiButterflyFill className={css.star} />
          <PiButterflyFill className={css.star} />
          <PiButterflyFill className={css.star} />
        </div>
      </div>
    </>
  );
}
