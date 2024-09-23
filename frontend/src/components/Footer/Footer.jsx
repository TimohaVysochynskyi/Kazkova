import Navigation from '../Navigation/Navigation';
import css from './Footer.module.css';

export default function Footer() {
    return (
        <>
            <footer className={css.footer}>
                <Navigation />
            </footer>
        </>
    )
}