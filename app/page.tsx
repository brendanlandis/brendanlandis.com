import {
  ArrowUpRight,
  ArrowRight,
  ArrowDownRight,
} from '@phosphor-icons/react/dist/ssr';
import './css/home.css';

export default function Home() {
  return (
    <div className="wrapper wrapper-home">
      {/* <Stairs size={100} weight="thin" />
      <PottedPlant size={100} weight="duotone" />
      <Heartbeat size={100} weight="thin" />
      <HandHeart size={100} weight="thin" />
      <Graph size={100} weight="duotone" />
      <FlyingSaucer size={100} weight="duotone" /> */}

      <h1>Hi, I'm <span>Brendan</span>.</h1>
      <div id="introText">
        <p>I'm an independent</p>
        <div id="chooser">
          <div className="chooser-item" id="chooser-top">
            <ArrowUpRight size={44} weight="regular" />
            <a href="/dev/">designer &amp; developer</a>
            <ArrowDownRight size={44} weight="regular" />
          </div>
          <div className="chooser-item" id="chooser-middle">
            <ArrowRight size={44} weight="regular" />
            <a href="/music/">musician &amp; teacher</a>
            <ArrowRight size={44} weight="regular" />
          </div>
          <div className="chooser-item" id="chooser-bottom">
            <ArrowDownRight size={44} weight="regular" />
            <a href="/tarot/">tarot reader</a>
            <ArrowUpRight size={44} weight="regular" />
          </div>
        </div>
        <p>based in Queens.</p>
      </div>
    </div>
  );
}
