import KazkaCard from "../KazkaCard/KazkaCard";
import css from "./KazkaList.module.css";

export default function KazkaList({ kazkas, openModal }) {
  return (
    <>
      <div className={css.container} id="kazka-list">
        <ul className={css.list}>
          {kazkas.map((kazka) => (
            <li className={css.item} key={kazka._id}>
              <KazkaCard kazka={kazka} openModal={openModal} />
            </li>
          ))}
        </ul>
      </div>
    </>
  );
}
