import Logo from "../Logo/Logo";
import { FaAnglesDown } from "react-icons/fa6";

import css from "./Banner.module.css";

export default function Banner() {
  return (
    <>
      <div className={css.banner}>
        <div className={css.top}>
          <div className={css.content}>
            <h1 className={css.title}>
              <span className={css.number}>10</span> Інтерактивних Аудіоказок
              Українською
            </h1>
          </div>
          <Logo />
        </div>
        <div className={css.bottom}>
          <a href="#kazka-list">
            <FaAnglesDown className={css.arrow} />
          </a>
        </div>
      </div>
    </>
  );
}
