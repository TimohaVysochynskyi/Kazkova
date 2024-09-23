import { NavLink } from "react-router-dom";
import clsx from "clsx";
import css from "./Navigation.module.css";

export default function Navigation() {
  const linkClass = ({ isActive }) => {
    return clsx(css.link, isActive && css.active);
  };

  return (
    <>
      <ul className={css.list}>
        <li className={css.item}>
          <NavLink to="/" className={linkClass}>
            Головна
          </NavLink>
        </li>
        <li className={css.item}>
          <NavLink to="/feedbacks" className={linkClass}>
            Відгуки
          </NavLink>
        </li>
        <li className={css.item}>
          <NavLink to="/donations" className={linkClass}>
            Підтримати
          </NavLink>
        </li>
      </ul>
    </>
  );
}
