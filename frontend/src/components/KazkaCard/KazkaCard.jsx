import css from "./KazkaCard.module.css";

export default function KazkaCard({
  kazka,
  kazka: { name, author, media },
  openModal,
}) {
  return (
    <div className={css.container} onClick={() => openModal(kazka)}>
      <img
        src={`/previews/${media}.png`}
        alt="Картинка"
        className={css.image}
      />
      <div className={css.description}>
        <p className={css.text}>{name}</p>
        <p className={css.text}>{author}</p>
      </div>
    </div>
  );
}
