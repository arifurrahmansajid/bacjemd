// Memory Converter site partials — direction 1a "Archive Classic"
// Loaded in run_script via: eval(await readFile('site/_partials.js')); const P = globalThis.MCP;
globalThis.MCP = (() => {
const C = { navy:'#16324F', navy2:'#1E3A5C', blue:'#436DA5', blueH:'#3A5F91', cyan:'#39B7EC', off:'#F3F7FC', line:'#E3EBF4', body:'#4A5D73', ink:'#34495E', mut:'#64748B', pale:'#8296AB', chipLine:'#D7E2EE' };

// ---------- icons ----------
const ic = {
  vhs:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round"><rect x="2.5" y="6" width="19" height="12" rx="2"></rect><circle cx="8" cy="12" r="2.3"></circle><circle cx="16" cy="12" r="2.3"></circle><line x1="10.4" y1="12" x2="13.6" y2="12"></line></svg>`,
  film:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="1.5"></circle><circle cx="12" cy="7" r="1.6"></circle><circle cx="12" cy="17" r="1.6"></circle><circle cx="7" cy="12" r="1.6"></circle><circle cx="17" cy="12" r="1.6"></circle></svg>`,
  photo:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4.5" width="18" height="15" rx="2"></rect><circle cx="9" cy="10" r="1.7"></circle><path d="M3 16.5l5-4 4 3 4-3.5 5 4.5"></path></svg>`,
  cassette:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="5.5" width="19" height="13" rx="2"></rect><circle cx="8.5" cy="11.5" r="2"></circle><circle cx="15.5" cy="11.5" r="2"></circle><path d="M7 18.5l1.5-3h7l1.5 3"></path></svg>`,
  cam:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="7" width="13" height="10" rx="2"></rect><path d="M15.5 10.5l6-2.5v8l-6-2.5"></path><circle cx="9" cy="12" r="2.2"></circle></svg>`,
  archive:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8.5" width="18" height="11" rx="2"></rect><rect x="2" y="4.5" width="20" height="4" rx="1.2"></rect><line x1="9.5" y1="13" x2="14.5" y2="13"></line></svg>`,
  projector:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="10" width="18" height="9.5" rx="2"></rect><path d="M3.5 10l1.6-4.6 16 1.8-.9 2.8"></path><line x1="9.2" y1="5.8" x2="8.2" y2="9.3"></line><line x1="14.4" y1="6.4" x2="13.4" y2="9.7"></line></svg>`,
  disc:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="2.6"></circle><path d="M12 3a9 9 0 019 9" stroke-opacity=".45"></path></svg>`,
  mic:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="3" width="6" height="11" rx="3"></rect><path d="M5.5 11a6.5 6.5 0 0013 0"></path><line x1="12" y1="17.5" x2="12" y2="21"></line></svg>`,
  check:(s,w)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="${w||2.6}" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 12.5l5 5 10-11"></path></svg>`,
  x:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#A8B7C7" stroke-width="2.2" stroke-linecap="round"><line x1="6" y1="6" x2="18" y2="18"></line><line x1="18" y1="6" x2="6" y2="18"></line></svg>`,
  phone:(s,c)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="${c||'#39B7EC'}" stroke-width="2" stroke-linecap="round"><rect x="7" y="2.5" width="10" height="19" rx="2.5"></rect><line x1="10.5" y1="18.2" x2="13.5" y2="18.2"></line></svg>`,
  box:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l9 4.5-9 4.5-9-4.5z"></path><path d="M3 7.5v9l9 4.5 9-4.5v-9"></path><line x1="12" y1="12" x2="12" y2="21"></line></svg>`,
  sparkle:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linejoin="round"><path d="M12 4l1.8 6.2L20 12l-6.2 1.8L12 20l-1.8-6.2L4 12l6.2-1.8z"></path></svg>`,
  monitor:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round"><rect x="3" y="4.5" width="18" height="12.5" rx="2"></rect><line x1="9" y1="20.5" x2="15" y2="20.5"></line><line x1="12" y1="17" x2="12" y2="20.5"></line></svg>`,
  ret:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 10.5l-4 4 4 4"></path><path d="M5 14.5h11a5 5 0 005-5v-4"></path></svg>`,
  search:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round"><circle cx="10.5" cy="10.5" r="6.5"></circle><line x1="15.5" y1="15.5" x2="21" y2="21"></line></svg>`,
  doc:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2.5h8l4 4V21.5H6z"></path><path d="M14 2.5v4h4"></path><line x1="9" y1="12" x2="15" y2="12"></line><line x1="9" y1="16" x2="15" y2="16"></line></svg>`,
  pin:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21.5s-7-6.5-7-11.5a7 7 0 0114 0c0 5-7 11.5-7 11.5z"></path><circle cx="12" cy="9.5" r="2.5"></circle></svg>`,
  book:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4.5h6.5a2.5 2.5 0 012.5 2.5v13a2 2 0 00-2-2H4z"></path><path d="M20 4.5h-6.5A2.5 2.5 0 0011 7v13a2 2 0 012-2h7z" transform="translate(1 0)"></path></svg>`,
  wave:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.9" stroke-linecap="round"><line x1="4" y1="9" x2="4" y2="15"></line><line x1="8" y1="6" x2="8" y2="18"></line><line x1="12" y1="10" x2="12" y2="14"></line><line x1="16" y1="4.5" x2="16" y2="19.5"></line><line x1="20" y1="8" x2="20" y2="16"></line></svg>`,
  slide:(s)=>`<svg width="${s}" height="${s}" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="1.6"></rect><rect x="7" y="9" width="10" height="6.5" rx="1"></rect></svg>`,
};
const stars = (fs)=>`<span style="color:${C.cyan};font-size:${fs}px;letter-spacing:2px">★★★★★</span>`;
const holder = (w,h,label,dark)=>`<div style="display:flex;align-items:center;justify-content:center;${w?`width:${w};`:''}height:${h};border-radius:16px;${dark?`background:repeating-linear-gradient(45deg, rgba(57,183,236,.08) 0px, rgba(57,183,236,.08) 10px, rgba(57,183,236,0) 10px, rgba(57,183,236,0) 20px),#1E3A5C`:`background:repeating-linear-gradient(45deg, rgba(67,109,165,.10) 0px, rgba(67,109,165,.10) 10px, rgba(67,109,165,0) 10px, rgba(67,109,165,0) 20px),#E4EDF6`}"><span style="font-family:ui-monospace,monospace;font-size:12px;letter-spacing:.05em;color:${dark?'rgba(255,255,255,.6)':'#5B7188'}">${label}</span></div>`;
const grain = (pos)=>`<sc-if value="{{ grain }}" hint-placeholder-val="{{ true }}"><div style="position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(${pos||'120% 90% at 70% 0%'}, rgba(57,183,236,.10), rgba(57,183,236,0) 55%),repeating-linear-gradient(0deg, rgba(255,255,255,.028) 0px, rgba(255,255,255,.028) 1px, rgba(255,255,255,0) 1px, rgba(255,255,255,0) 3px)"></div></sc-if>`;

// ---------- desktop ----------
const NAV = [['Services','Our Services.dc.html'],['How It Works','Home.dc.html'],['Reviews','Home.dc.html'],['Areas Served','Areas Served.dc.html'],['About','Home.dc.html']];
function dHeader(active){
  const links = NAV.map(([l,h])=>`<a href="${h}" style="font-size:15px;font-weight:${l===active?800:600};color:${l===active?C.blue:C.ink};${l===active?`border-bottom:2px solid ${C.cyan};padding-bottom:3px;`:''}">${l}</a>`).join('\n                ');
  return `<div style="display:flex;align-items:center;justify-content:space-between;height:78px;padding:0 48px;background:#FFFFFF;border-bottom:1px solid ${C.line}">
              <a href="Home.dc.html" style="display:flex;align-items:center;gap:12px;color:inherit">
                <img src="../assets/logo.jpg" alt="Memory Converter" style="width:46px;height:46px;mix-blend-mode:multiply">
                <span>
                  <span style="display:block;font-weight:800;font-size:19px;line-height:1.1"><span style="color:${C.blue}">Memory</span> <span style="color:${C.cyan}">Converter</span></span>
                  <span style="display:block;font-size:10px;font-weight:700;letter-spacing:.14em;color:${C.pale}">HOLLYWOOD, FL</span>
                </span>
              </a>
              <div style="display:flex;align-items:center;gap:30px">
                ${links}
              </div>
              <div style="display:flex;align-items:center;gap:20px">
                <a href="#" style="display:flex;align-items:center;gap:8px;font-weight:800;font-size:15px;color:${C.blue}">${ic.phone(17)} 754-276-1601</a>
                <a href="#" style="background:${C.blue};color:#FFFFFF;font-weight:700;font-size:15px;padding:13px 24px;border-radius:12px" style-hover="background:${C.blueH}">Get a Free Quote</a>
              </div>
            </div>`;
}
function dCrumb(items){
  const parts = items.map(([l,h],i)=> i===items.length-1 ? `<span style="font-size:13.5px;font-weight:700;color:${C.ink}">${l}</span>` : `<a href="${h}" style="font-size:13.5px;font-weight:600;color:${C.mut}" style-hover="color:${C.blue}">${l}</a><span style="color:#B6C4D4;font-size:13px">›</span>`).join('\n              ');
  return `<div style="display:flex;align-items:center;gap:10px;padding:16px 48px;background:${C.off};border-bottom:1px solid ${C.line}">
              ${parts}
            </div>`;
}
function dTrust(extra){
  const items = ['BBB Accredited','Family-owned since 2020','5-star on Google & Yelp','4K/5K in-house scanning','Never outsourced overseas','Insured & tracked shipping', extra||'3,000+ tapes & 40,000+ photos digitized'];
  return `<div style="background:${C.off};border-bottom:1px solid ${C.line};padding:22px 120px;display:flex;flex-wrap:wrap;justify-content:center;column-gap:34px;row-gap:12px">
              ${items.map(t=>`<div style="display:flex;align-items:center;gap:8px">${ic.check(15)}<span style="font-size:13.5px;font-weight:700;color:${C.ink}">${t}</span></div>`).join('\n              ')}
            </div>`;
}
function dHowCard(icon,num,h,body){
  return `<div style="background:#FFFFFF;border:1px solid ${C.line};border-radius:16px;padding:28px">
                  <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px">
                    <div style="display:flex;align-items:center;justify-content:center;width:52px;height:52px;border-radius:50%;border:1.5px solid ${C.cyan}">${icon}</div>
                    <div style="font-size:15px;font-weight:800;color:#C3D2E3">${num}</div>
                  </div>
                  <div style="font-size:17px;font-weight:800;color:${C.navy};margin-bottom:8px">${h}</div>
                  <div style="font-size:14px;line-height:1.6;color:${C.body};font-weight:500">${body}</div>
                </div>`;
}
function dHow(steps, opts){
  const o = opts||{};
  const icons = [ic.box(24), ic.sparkle(24), ic.monitor(24), ic.ret(24)];
  return `<div style="background:${o.bg||C.off};padding:96px 120px">
              <div style="display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:52px">
                <h2 style="margin:0;font-size:40px;font-weight:800;color:${C.navy};letter-spacing:-.01em">${o.title||`How It <span style="color:${C.cyan}">Works</span>.`}</h2>
                <div style="font-size:14.5px;font-weight:700;color:${C.body}">${o.note||'Door to door, most orders take 2–3 weeks.'}</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px">
                ${steps.map((s,i)=>dHowCard(s.icon||icons[i],'0'+(i+1),s.h,s.b)).join('\n                ')}
              </div>
            </div>`;
}
function dReviews(reviews, opts){
  const o = opts||{};
  return `<div style="background:${o.bg||C.off};padding:96px 120px">
              <div style="display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:52px">
                <h2 style="margin:0;font-size:40px;font-weight:800;color:${C.navy};letter-spacing:-.01em">${o.title||`A Wall of <span style="color:${C.cyan}">Stories</span>.`}</h2>
                <div style="display:flex;align-items:center;gap:10px;background:#FFFFFF;border:1px solid ${C.line};border-radius:99px;padding:10px 20px">
                  ${stars(15)}
                  <span style="font-size:14px;font-weight:800;color:${C.navy}">5.0 on Google & Yelp</span>
                </div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(${reviews.length},1fr);gap:24px">
                ${reviews.map(r=>`<div style="background:#FFFFFF;border:1px solid ${C.line};border-radius:16px;padding:30px;box-shadow:0 8px 24px rgba(22,50,79,.05)">
                  <div style="margin-bottom:16px">${stars(14)}</div>
                  <p style="margin:0 0 22px 0;font-size:15.5px;line-height:1.65;color:${C.ink};font-weight:500">“${r.q}”</p>
                  <div style="font-size:14.5px;font-weight:800;color:${C.navy}">${r.n} <span style="color:${C.mut};font-weight:600">· ${r.c}</span></div>
                </div>`).join('\n                ')}
              </div>
            </div>`;
}
function dFAQ(items, opts){
  const o = opts||{};
  const first = items[0];
  const rest = items.slice(1);
  return `<div style="background:${o.bg||'#FFFFFF'};padding:96px 120px">
              <div style="display:grid;grid-template-columns:.8fr 1.2fr;gap:72px">
                <div>
                  <h2 style="margin:0 0 14px 0;font-size:40px;font-weight:800;color:${C.navy};letter-spacing:-.01em">Questions, <span style="color:${C.cyan}">Answered</span>.</h2>
                  <p style="margin:0 0 24px 0;font-size:16px;line-height:1.6;color:${C.body};font-weight:500">${o.lead||'Anything else? Call us — a real person in our Hollywood studio picks up.'}</p>
                  <a href="#" style="display:inline-flex;align-items:center;gap:8px;font-weight:800;font-size:16px;color:${C.blue}">${ic.phone(17)} 754-276-1601</a>
                </div>
                <div>
                  <div style="border-top:1px solid ${C.line}">
                    <div style="border-bottom:1px solid ${C.line};padding:22px 4px">
                      <div style="display:flex;align-items:center;justify-content:space-between;gap:16px">
                        <div style="font-size:17px;font-weight:800;color:${C.navy}">${first.q}</div>
                        <div style="color:${C.cyan};font-size:22px;font-weight:600;line-height:1">−</div>
                      </div>
                      <p style="margin:12px 0 0 0;font-size:15px;line-height:1.65;color:${C.body};font-weight:500;max-width:560px">${first.a}</p>
                    </div>
                    ${rest.map(f=>`<div style="display:flex;align-items:center;justify-content:space-between;gap:16px;border-bottom:1px solid ${C.line};padding:22px 4px">
                      <div style="font-size:17px;font-weight:800;color:${C.navy}">${f.q}</div>
                      <div style="color:${C.cyan};font-size:22px;font-weight:600;line-height:1">+</div>
                    </div>`).join('\n                    ')}
                  </div>
                </div>
              </div>
            </div>`;
}
function dAreas(title, sub, opts){
  const o = opts||{};
  const cities = [['Hollywood','City - Hollywood.dc.html'],['Fort Lauderdale','Areas Served.dc.html'],['Miami','Areas Served.dc.html'],['Boca Raton','Areas Served.dc.html'],['Pompano Beach','Areas Served.dc.html'],['Coral Gables','Areas Served.dc.html'],['Aventura','Areas Served.dc.html'],['West Palm Beach','Areas Served.dc.html']];
  return `<div style="background:${o.bg||'#FFFFFF'};padding:88px 120px">
              <div style="display:grid;grid-template-columns:1.1fr .9fr;gap:72px;align-items:center">
                <div>
                  <h2 style="margin:0 0 14px 0;font-size:38px;line-height:1.14;font-weight:800;color:${C.navy};letter-spacing:-.01em">${title}</h2>
                  <p style="margin:0 0 28px 0;font-size:16.5px;line-height:1.6;color:${C.body};font-weight:500;max-width:520px">${sub}</p>
                  <div style="display:flex;flex-wrap:wrap;gap:10px;max-width:560px">
                    ${cities.map(([c,h])=>`<a href="${h}" style="border:1px solid ${C.chipLine};background:${C.off};color:${C.ink};font-size:14px;font-weight:700;padding:10px 18px;border-radius:99px" style-hover="border-color:${C.cyan};color:${C.blue}">${c}</a>`).join('\n                    ')}
                  </div>
                </div>
                <div style="background:${C.off};border:1px solid ${C.line};border-radius:16px;padding:32px">
                  <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px">
                    <div style="display:flex;align-items:center;justify-content:center;width:44px;height:44px;border-radius:12px;background:rgba(57,183,236,.14)">${ic.box(22)}</div>
                    <div style="font-size:18px;font-weight:800;color:${C.navy}">Not in South Florida?</div>
                  </div>
                  <div style="font-size:15px;line-height:1.65;color:${C.body};font-weight:500;margin-bottom:18px">We serve families nationwide. Your free quote includes a prepaid, fully insured mail-in kit — tracked both ways, originals always returned.</div>
                  <a href="Areas Served.dc.html" style="font-size:14.5px;font-weight:800;color:${C.blue}">Start a mail-in order →</a>
                </div>
              </div>
            </div>`;
}
function dLMcross(text){
  return `<div style="background:${C.off};border-top:1px solid ${C.line};border-bottom:1px solid ${C.line};padding:56px 120px">
              <div style="display:flex;align-items:center;gap:40px">
                <div style="display:flex;align-items:center;justify-content:center;width:74px;height:74px;border-radius:50%;background:${C.navy};flex-shrink:0">${ic.projector(32)}</div>
                <div style="flex:1">
                  <div style="font-size:12px;font-weight:800;letter-spacing:.14em;color:${C.blue};margin-bottom:8px">MORE THAN A CONVERSION?</div>
                  <div style="font-size:18px;line-height:1.55;font-weight:600;color:${C.ink};max-width:820px">${text}</div>
                </div>
                <a href="Living Memories.dc.html" style="flex-shrink:0;border:1.5px solid ${C.cyan};color:${C.blue};font-weight:700;font-size:15.5px;padding:14px 26px;border-radius:12px" style-hover="background:rgba(57,183,236,.1)">Explore Living Memories</a>
              </div>
            </div>`;
}
function dCTA(h, sub, opts){
  const o = opts||{};
  return `<div style="position:relative;background:${C.navy};overflow:hidden">
              ${grain('100% 120% at 50% 0%')}
              <div style="position:relative;text-align:center;padding:88px 120px">
                <h2 style="margin:0 0 14px 0;font-size:44px;font-weight:800;color:#FFFFFF;letter-spacing:-.01em">${h}</h2>
                <p style="margin:0 auto 32px auto;font-size:17px;line-height:1.6;color:rgba(255,255,255,.78);font-weight:500;max-width:560px">${sub}</p>
                <div style="display:flex;justify-content:center;gap:16px">
                  <a href="#" style="background:${C.blue};color:#FFFFFF;font-weight:700;font-size:16px;padding:16px 32px;border-radius:12px" style-hover="background:#5A82B8">${o.cta||'Get a Free Quote'}</a>
                  <a href="#" style="display:inline-flex;align-items:center;gap:9px;border:1.5px solid rgba(255,255,255,.25);color:#FFFFFF;font-weight:700;font-size:16px;padding:16px 26px;border-radius:12px" style-hover="border-color:${C.cyan};color:${C.cyan}">${ic.phone(17)} Call 754-276-1601</a>
                </div>
              </div>
            </div>`;
}
function dMap(){
  return `<div style="position:relative;height:340px;background-image:linear-gradient(rgba(67,109,165,.08) 1px, transparent 1px),linear-gradient(90deg, rgba(67,109,165,.08) 1px, transparent 1px);background-size:44px 44px;background-color:#E8EFF6">
              <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-60%);display:flex;flex-direction:column;align-items:center;gap:2px">
                <div style="display:flex;align-items:center;justify-content:center;width:34px;height:34px;border-radius:50%;background:${C.cyan};box-shadow:0 10px 24px rgba(57,183,236,.45)"><div style="width:10px;height:10px;border-radius:50%;background:#FFFFFF"></div></div>
                <div style="width:2px;height:12px;background:${C.cyan}"></div>
              </div>
              <div style="position:absolute;left:120px;top:50%;transform:translateY(-50%);background:#FFFFFF;border:1px solid ${C.line};border-radius:14px;padding:22px 26px;box-shadow:0 16px 40px rgba(22,50,79,.14)">
                <div style="font-size:15px;font-weight:800;color:${C.navy};margin-bottom:6px">Memory Converter</div>
                <div style="font-size:14px;line-height:1.55;color:${C.body};font-weight:500">6630 Meade Street<br>Hollywood, FL 33024</div>
                <a href="#" style="display:inline-block;margin-top:10px;font-size:13.5px;font-weight:800;color:${C.blue}">Get directions →</a>
              </div>
              <div style="position:absolute;right:16px;bottom:12px;font-family:ui-monospace,monospace;font-size:11px;color:${C.pale};letter-spacing:.05em">google map embed — hollywood / south florida</div>
            </div>`;
}
function dFooter(){
  const svc = [['VHS to Digital','Convert VHS to Digital.dc.html'],['8mm & Super 8 Film','Film to Digital.dc.html'],['Cassette to CD & Digital','Cassette to Digital.dc.html'],['Photo Scanning & Restoration','Photo Scanning and Restoration.dc.html'],['DVD to Digital','DVD to Digital.dc.html']];
  const co = [['How It Works','Home.dc.html'],['Reviews','Home.dc.html'],['Areas Served','Areas Served.dc.html'],['Compare Us','Compare.dc.html'],['Guides','Guides.dc.html'],['Reel Revival Blog','Reel Revival.dc.html']];
  return `<div style="background:${C.navy};padding:64px 120px 28px 120px">
              <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr 1.2fr;gap:48px;padding-bottom:44px;border-bottom:1px solid rgba(255,255,255,.12)">
                <div>
                  <div style="font-weight:800;font-size:19px;margin-bottom:12px"><span style="color:#FFFFFF">Memory</span> <span style="color:${C.cyan}">Converter</span></div>
                  <p style="margin:0 0 18px 0;font-size:14px;line-height:1.65;color:rgba(255,255,255,.65);font-weight:500;max-width:300px">White-glove memory digitization, handled by hand in Hollywood, FL — never overseas.</p>
                  <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px">${stars(13)}<span style="font-size:13px;font-weight:700;color:rgba(255,255,255,.75)">5.0 on Google</span></div>
                  <div style="display:flex;align-items:center;gap:8px">${stars(13)}<span style="font-size:13px;font-weight:700;color:rgba(255,255,255,.75)">5.0 on Yelp</span></div>
                </div>
                <div style="display:flex;flex-direction:column;gap:11px">
                  <div style="font-size:12px;font-weight:800;letter-spacing:.14em;color:rgba(255,255,255,.45);margin-bottom:4px">SERVICES</div>
                  ${svc.map(([l,h])=>`<a href="${h}" style="font-size:14px;font-weight:600;color:rgba(255,255,255,.78)" style-hover="color:${C.cyan}">${l}</a>`).join('\n                  ')}
                  <a href="Living Memories.dc.html" style="font-size:14px;font-weight:600;color:${C.cyan}" style-hover="color:#FFFFFF">Living Memories</a>
                </div>
                <div style="display:flex;flex-direction:column;gap:11px">
                  <div style="font-size:12px;font-weight:800;letter-spacing:.14em;color:rgba(255,255,255,.45);margin-bottom:4px">COMPANY</div>
                  ${co.map(([l,h])=>`<a href="${h}" style="font-size:14px;font-weight:600;color:rgba(255,255,255,.78)" style-hover="color:${C.cyan}">${l}</a>`).join('\n                  ')}
                </div>
                <div>
                  <div style="font-size:12px;font-weight:800;letter-spacing:.14em;color:rgba(255,255,255,.45);margin-bottom:15px">VISIT THE STUDIO</div>
                  <div style="font-size:14px;line-height:1.7;color:rgba(255,255,255,.78);font-weight:500;margin-bottom:14px">6630 Meade Street<br>Hollywood, FL 33024</div>
                  <a href="#" style="display:inline-flex;align-items:center;gap:8px;font-size:15px;font-weight:800;color:${C.cyan};margin-bottom:16px">${ic.phone(16)} 754-276-1601</a>
                  <div style="display:flex;gap:14px;margin-top:4px">
                    <a href="#" style="font-size:13px;font-weight:700;color:rgba(255,255,255,.6)" style-hover="color:${C.cyan}">Facebook</a>
                    <a href="#" style="font-size:13px;font-weight:700;color:rgba(255,255,255,.6)" style-hover="color:${C.cyan}">Yelp</a>
                    <a href="#" style="font-size:13px;font-weight:700;color:rgba(255,255,255,.6)" style-hover="color:${C.cyan}">Instagram</a>
                  </div>
                </div>
              </div>
              <div style="display:flex;align-items:center;justify-content:space-between;padding-top:24px">
                <div style="font-size:13px;font-weight:600;color:rgba(255,255,255,.45)">© 2026 Memory Converter · Hollywood, FL</div>
                <div style="display:flex;gap:18px">
                  <a href="#" style="font-size:13px;font-weight:600;color:rgba(255,255,255,.45)" style-hover="color:${C.cyan}">Privacy</a>
                  <a href="#" style="font-size:13px;font-weight:600;color:rgba(255,255,255,.45)" style-hover="color:${C.cyan}">Terms</a>
                </div>
              </div>
            </div>`;
}
function beforeAfter(h, labL, labR){
  return `<div style="position:relative;height:${h};border-radius:16px;overflow:hidden;box-shadow:0 30px 60px rgba(0,0,0,.35)">
                  <div style="display:grid;grid-template-columns:1fr 1fr;height:100%">
                    <div style="position:relative;display:flex;align-items:center;justify-content:center;background:repeating-linear-gradient(0deg, rgba(255,235,190,.06) 0px, rgba(255,235,190,.06) 2px, rgba(0,0,0,0) 2px, rgba(0,0,0,0) 5px),repeating-linear-gradient(45deg, rgba(255,235,190,.07) 0px, rgba(255,235,190,.07) 9px, rgba(0,0,0,0) 9px, rgba(0,0,0,0) 18px),#39392F">
                      <span style="font-family:ui-monospace,monospace;font-size:12px;letter-spacing:.06em;color:rgba(255,244,214,.55)">${labL}</span>
                      <div style="position:absolute;top:14px;left:14px;background:rgba(0,0,0,.5);color:rgba(255,255,255,.85);font-size:11px;font-weight:800;letter-spacing:.12em;padding:6px 12px;border-radius:99px">BEFORE</div>
                    </div>
                    <div style="position:relative;display:flex;align-items:center;justify-content:center;background:repeating-linear-gradient(45deg, rgba(57,183,236,.10) 0px, rgba(57,183,236,.10) 9px, rgba(57,183,236,0) 9px, rgba(57,183,236,0) 18px),#DCE9F5">
                      <span style="font-family:ui-monospace,monospace;font-size:12px;letter-spacing:.06em;color:#5B7188">${labR}</span>
                      <div style="position:absolute;top:14px;right:14px;background:${C.cyan};color:${C.navy};font-size:11px;font-weight:800;letter-spacing:.12em;padding:6px 12px;border-radius:99px">AFTER</div>
                    </div>
                  </div>
                  <div style="position:absolute;top:0;bottom:0;left:50%;width:3px;background:${C.cyan};transform:translateX(-50%)"></div>
                  <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);display:flex;align-items:center;justify-content:center;gap:3px;width:46px;height:46px;border-radius:50%;background:${C.cyan};box-shadow:0 10px 30px rgba(0,0,0,.4);color:${C.navy};font-weight:800;font-size:15px"><span>‹</span><span>›</span></div>
                </div>`;
}
function svcHero(o){
  return `<div style="position:relative;background:${C.navy};overflow:hidden">
              ${grain()}
              <div style="position:relative;display:grid;grid-template-columns:1.02fr .98fr;gap:64px;align-items:center;padding:76px 120px 84px 120px">
                <div>
                  <div style="font-size:13px;font-weight:800;letter-spacing:.16em;color:${C.cyan};margin-bottom:20px">${o.eyebrow}</div>
                  <h1 style="margin:0 0 22px 0;font-size:54px;line-height:1.06;font-weight:800;color:#FFFFFF;letter-spacing:-.01em;text-wrap:balance">${o.h1}</h1>
                  <p style="margin:0 0 30px 0;font-size:17.5px;line-height:1.65;color:rgba(255,255,255,.82);max-width:540px;font-weight:500">${o.sub}</p>
                  <div style="display:flex;align-items:center;gap:14px;margin-bottom:24px">
                    <a href="#" style="background:${C.blue};color:#FFFFFF;font-weight:700;font-size:16px;padding:16px 30px;border-radius:12px" style-hover="background:#5A82B8">${o.cta1||'Get a Free Quote'}</a>
                    <a href="#" style="border:1.5px solid ${C.cyan};color:${C.cyan};font-weight:700;font-size:16px;padding:16px 30px;border-radius:12px" style-hover="background:rgba(57,183,236,.12)">${o.cta2}</a>
                    ${o.price?`<div style="font-size:15px;font-weight:800;color:rgba(255,255,255,.85)">${o.price}</div>`:''}
                  </div>
                  <div style="display:flex;flex-wrap:wrap;gap:8px 10px;font-size:13.5px;font-weight:600;color:rgba(255,255,255,.66)">
                    ${o.trust.map((t,i)=>i<o.trust.length-1?`<span>${t}</span><span style="color:${C.cyan}">·</span>`:`<span>${t}</span>`).join('\n                    ')}
                  </div>
                </div>
                <div>${o.visual}</div>
              </div>
            </div>`;
}
function sectionHead(h2, sub, center){
  return `<div style="${center?'text-align:center;max-width:680px;margin:0 auto 52px auto':'max-width:640px;margin-bottom:52px'}">
                <h2 style="margin:0 0 14px 0;font-size:40px;font-weight:800;color:${C.navy};letter-spacing:-.01em">${h2}</h2>
                ${sub?`<p style="margin:0;font-size:16.5px;line-height:1.6;color:${C.body};font-weight:500">${sub}</p>`:''}
              </div>`;
}
function formatChip(icon, label, sub){
  return `<div style="display:flex;align-items:center;gap:14px;border:1px solid ${C.line};background:#FFFFFF;border-radius:14px;padding:16px 18px">
                  <div style="display:flex;align-items:center;justify-content:center;width:44px;height:44px;border-radius:11px;background:rgba(57,183,236,.12);flex-shrink:0">${icon}</div>
                  <div><div style="font-size:15.5px;font-weight:800;color:${C.navy}">${label}</div>${sub?`<div style="font-size:12.5px;color:${C.mut};font-weight:600">${sub}</div>`:''}</div>
                </div>`;
}
function getItem(icon, h, b){
  return `<div style="display:flex;gap:16px;align-items:flex-start">
                  <div style="display:flex;align-items:center;justify-content:center;width:44px;height:44px;border-radius:12px;background:rgba(57,183,236,.12);flex-shrink:0">${icon}</div>
                  <div><div style="font-size:16.5px;font-weight:800;color:${C.navy};margin-bottom:4px">${h}</div><div style="font-size:14px;line-height:1.55;color:${C.body};font-weight:500">${b}</div></div>
                </div>`;
}
function priceTable(o){
  return `<div style="border:1px solid ${C.line};border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(22,50,79,.05)">
                <div style="display:grid;grid-template-columns:${o.cols};background:${C.navy};padding:16px 26px;gap:20px">
                  ${o.head.map(h=>`<div style="font-size:13px;font-weight:800;letter-spacing:.08em;color:#FFFFFF">${h}</div>`).join('\n                  ')}
                </div>
                ${o.rows.map((r,i)=>`<div style="display:grid;grid-template-columns:${o.cols};padding:18px 26px;gap:20px;background:${i%2?C.off:'#FFFFFF'};border-top:1px solid ${C.line}">
                  ${r.map((cell,j)=>`<div style="font-size:14.5px;font-weight:${j===0?800:600};color:${j===0?C.navy:C.body}">${cell}</div>`).join('\n                  ')}
                </div>`).join('\n                ')}
              </div>`;
}
function vsTable(o){
  const cy = (t)=>`<div style="display:flex;align-items:center;gap:8px">${ic.check(15)}<span style="font-size:14px;font-weight:700;color:${C.navy}">${t}</span></div>`;
  const nx = (t)=>`<div style="display:flex;align-items:center;gap:8px">${ic.x(14)}<span style="font-size:14px;font-weight:600;color:${C.mut}">${t}</span></div>`;
  return `<div style="border:1px solid ${C.line};border-radius:16px;overflow:hidden;box-shadow:0 8px 24px rgba(22,50,79,.05)">
                <div style="display:grid;grid-template-columns:1.2fr 1.15fr 1fr;background:${C.navy};padding:16px 26px;gap:20px">
                  <div style="font-size:13px;font-weight:800;letter-spacing:.08em;color:rgba(255,255,255,.7)"></div>
                  <div style="font-size:13.5px;font-weight:800;color:${C.cyan}">${o.us||'MEMORY CONVERTER'}</div>
                  <div style="font-size:13.5px;font-weight:800;color:rgba(255,255,255,.7)">${o.them||'MAIL-IN BOXES'}</div>
                </div>
                ${o.rows.map((r,i)=>`<div style="display:grid;grid-template-columns:1.2fr 1.15fr 1fr;padding:16px 26px;gap:20px;align-items:center;background:${i%2?C.off:'#FFFFFF'};border-top:1px solid ${C.line}">
                  <div style="font-size:14.5px;font-weight:800;color:${C.navy}">${r[0]}</div>
                  ${cy(r[1])}
                  ${nx(r[2])}
                </div>`).join('\n                ')}
              </div>`;
}

// ---------- mobile ----------
function mHeader(){
  return `<div style="display:flex;align-items:center;justify-content:space-between;height:60px;padding:0 16px;background:#FFFFFF;border-bottom:1px solid ${C.line}">
              <a href="Home.dc.html" style="display:flex;align-items:center;gap:9px;color:inherit">
                <img src="../assets/logo.jpg" alt="Memory Converter" style="width:34px;height:34px;mix-blend-mode:multiply">
                <span style="font-weight:800;font-size:15px"><span style="color:${C.blue}">Memory</span> <span style="color:${C.cyan}">Converter</span></span>
              </a>
              <div style="display:flex;align-items:center;gap:10px">
                <a href="#" style="display:flex;align-items:center;justify-content:center;width:38px;height:38px;border-radius:50%;border:1.5px solid ${C.cyan}">${ic.phone(16)}</a>
                <div style="display:flex;flex-direction:column;gap:4.5px;padding:6px 2px">
                  <div style="width:20px;height:2.2px;border-radius:2px;background:${C.navy}"></div>
                  <div style="width:20px;height:2.2px;border-radius:2px;background:${C.navy}"></div>
                  <div style="width:14px;height:2.2px;border-radius:2px;background:${C.navy}"></div>
                </div>
              </div>
            </div>`;
}
function mCrumb(items){
  return `<div style="display:flex;align-items:center;gap:8px;padding:12px 16px;background:${C.off};border-bottom:1px solid ${C.line};overflow:hidden;white-space:nowrap">
              ${items.map(([l,h],i)=> i===items.length-1 ? `<span style="font-size:12px;font-weight:700;color:${C.ink}">${l}</span>` : `<a href="${h}" style="font-size:12px;font-weight:600;color:${C.mut}">${l}</a><span style="color:#B6C4D4;font-size:12px">›</span>`).join('\n              ')}
            </div>`;
}
function mSticky(cta){
  return `<div style="position:absolute;top:706px;left:0;right:0;z-index:6;display:flex;gap:10px;align-items:center;background:rgba(255,255,255,.96);border-top:1px solid ${C.line};padding:12px 16px;box-shadow:0 -10px 30px rgba(22,50,79,.14)">
              <a href="#" style="flex:1;display:block;text-align:center;background:${C.blue};color:#FFFFFF;font-weight:700;font-size:15.5px;padding:14px 0;border-radius:12px">${cta||'Get a Free Quote'}</a>
              <a href="#" style="display:flex;align-items:center;justify-content:center;width:50px;height:50px;border-radius:12px;border:1.5px solid ${C.cyan}">${ic.phone(19)}</a>
            </div>`;
}
function mHero(o){
  return `<div style="position:relative;background:${C.navy};overflow:hidden;padding:40px 20px 48px 20px">
              <div style="position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(140% 70% at 50% 0%, rgba(57,183,236,.10), rgba(57,183,236,0) 55%)"></div>
              <div style="position:relative">
                <div style="font-size:10.5px;font-weight:800;letter-spacing:.15em;color:${C.cyan};margin-bottom:14px">${o.eyebrow}</div>
                <h1 style="margin:0 0 14px 0;font-size:31px;line-height:1.12;font-weight:800;color:#FFFFFF;letter-spacing:-.01em;text-wrap:balance">${o.h1}</h1>
                <p style="margin:0 0 20px 0;font-size:14.5px;line-height:1.6;color:rgba(255,255,255,.82);font-weight:500">${o.sub}</p>
                <div style="display:flex;flex-direction:column;gap:10px;${o.visual||o.chips?'margin-bottom:20px':''}">
                  <a href="#" style="display:block;text-align:center;background:${C.blue};color:#FFFFFF;font-weight:700;font-size:16px;padding:15px 0;border-radius:12px">${o.cta1||'Get a Free Quote'}</a>
                  ${o.cta2?`<a href="#" style="display:block;text-align:center;border:1.5px solid ${C.cyan};color:${C.cyan};font-weight:700;font-size:15.5px;padding:14px 0;border-radius:12px">${o.cta2}</a>`:''}
                </div>
                ${o.chips?`<div style="display:flex;flex-direction:column;gap:8px;${o.visual?'margin-bottom:22px':''}">${o.chips.map(t=>`<div style="display:flex;align-items:center;gap:8px">${ic.check(14)}<span style="font-size:13px;font-weight:600;color:rgba(255,255,255,.75)">${t}</span></div>`).join('\n                ')}</div>`:''}
                ${o.visual||''}
              </div>
            </div>`;
}
function mTrustChips(items){
  return `<div style="background:${C.off};border-bottom:1px solid ${C.line};padding:20px 20px;display:flex;flex-wrap:wrap;gap:8px">
              ${items.map(t=>`<div style="display:flex;align-items:center;gap:6px;background:#FFFFFF;border:1px solid ${C.line};border-radius:99px;padding:7px 12px">${ic.check(12,2.8)}<span style="font-size:12px;font-weight:700;color:${C.ink}">${t}</span></div>`).join('\n              ')}
            </div>`;
}
function mRow(icon, h, sub, href){
  return `<a href="${href||'#'}" style="display:flex;align-items:center;gap:14px;border:1px solid ${C.line};border-radius:14px;padding:14px 16px;color:inherit;background:#FFFFFF">
                  <div style="display:flex;align-items:center;justify-content:center;width:42px;height:42px;border-radius:11px;background:rgba(57,183,236,.12);flex-shrink:0">${icon}</div>
                  <div style="flex:1"><div style="font-size:15.5px;font-weight:800;color:${C.navy}">${h}</div>${sub?`<div style="font-size:12.5px;color:${C.mut};font-weight:600">${sub}</div>`:''}</div>
                  <div style="color:${C.cyan};font-weight:800;font-size:18px">›</div>
                </a>`;
}
function mHow(steps, bg){
  return `<div style="background:${bg||C.off};padding:52px 20px">
              <h2 style="margin:0 0 24px 0;font-size:26px;font-weight:800;color:${C.navy}">How It <span style="color:${C.cyan}">Works</span>.</h2>
              <div style="display:flex;flex-direction:column">
                ${steps.map((s,i)=>`<div style="display:flex;gap:16px">
                  <div style="display:flex;flex-direction:column;align-items:center"><div style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;border:1.5px solid ${C.cyan};background:#FFFFFF;font-size:13px;font-weight:800;color:${C.blue};flex-shrink:0">${i+1}</div>${i<steps.length-1?`<div style="width:1.5px;flex:1;background:#C9D9E8"></div>`:''}</div>
                  <div style="${i<steps.length-1?'padding-bottom:24px':''}"><div style="font-size:16px;font-weight:800;color:${C.navy};margin:9px 0 5px 0">${s.h}</div><div style="font-size:13.5px;line-height:1.6;color:${C.body};font-weight:500">${s.b}</div></div>
                </div>`).join('\n                ')}
              </div>
            </div>`;
}
function mReviews(reviews, bg){
  return `<div style="background:${bg||'#FFFFFF'};padding:52px 20px">
              <h2 style="margin:0 0 6px 0;font-size:26px;font-weight:800;color:${C.navy}">A Wall of <span style="color:${C.cyan}">Stories</span>.</h2>
              <div style="display:flex;align-items:center;gap:8px;margin-bottom:20px">${stars(13)}<span style="font-size:12.5px;font-weight:800;color:${C.navy}">5.0 on Google & Yelp</span></div>
              <div style="display:flex;flex-direction:column;gap:12px">
                ${reviews.map(r=>`<div style="background:${bg==='#FFFFFF'||!bg?C.off:'#FFFFFF'};border:1px solid ${C.line};border-radius:14px;padding:20px">
                  <div style="margin-bottom:10px">${stars(12)}</div>
                  <p style="margin:0 0 14px 0;font-size:14px;line-height:1.6;color:${C.ink};font-weight:500">“${r.q}”</p>
                  <div style="font-size:13px;font-weight:800;color:${C.navy}">${r.n} <span style="color:${C.mut};font-weight:600">· ${r.c}</span></div>
                </div>`).join('\n                ')}
              </div>
            </div>`;
}
function mFAQ(items, bg){
  const first = items[0];
  return `<div style="background:${bg||'#FFFFFF'};padding:52px 20px">
              <h2 style="margin:0 0 20px 0;font-size:26px;font-weight:800;color:${C.navy}">Questions, <span style="color:${C.cyan}">Answered</span>.</h2>
              <div style="border-top:1px solid ${C.line}">
                <div style="border-bottom:1px solid ${C.line};padding:18px 2px">
                  <div style="display:flex;align-items:center;justify-content:space-between;gap:12px">
                    <div style="font-size:15px;font-weight:800;color:${C.navy}">${first.q}</div>
                    <div style="color:${C.cyan};font-size:20px;font-weight:600;line-height:1">−</div>
                  </div>
                  <p style="margin:10px 0 0 0;font-size:13.5px;line-height:1.6;color:${C.body};font-weight:500">${first.a}</p>
                </div>
                ${items.slice(1).map(f=>`<div style="display:flex;align-items:center;justify-content:space-between;gap:12px;border-bottom:1px solid ${C.line};padding:18px 2px">
                  <div style="font-size:15px;font-weight:800;color:${C.navy}">${f.q}</div>
                  <div style="color:${C.cyan};font-size:20px;font-weight:600;line-height:1">+</div>
                </div>`).join('\n                ')}
              </div>
            </div>`;
}
function mLM(text){
  return `<div style="background:${C.off};border-top:1px solid ${C.line};border-bottom:1px solid ${C.line};padding:36px 20px">
              <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
                <div style="display:flex;align-items:center;justify-content:center;width:50px;height:50px;border-radius:50%;background:${C.navy};flex-shrink:0">${ic.projector(24)}</div>
                <div style="font-size:11px;font-weight:800;letter-spacing:.13em;color:${C.blue}">MORE THAN A CONVERSION?</div>
              </div>
              <div style="font-size:14.5px;line-height:1.6;font-weight:600;color:${C.ink};margin-bottom:16px">${text}</div>
              <a href="Living Memories.dc.html" style="display:block;text-align:center;border:1.5px solid ${C.cyan};color:${C.blue};font-weight:700;font-size:15px;padding:13px 0;border-radius:12px">Explore Living Memories</a>
            </div>`;
}
function mCTA(h, sub, cta){
  return `<div style="position:relative;background:${C.navy};overflow:hidden;padding:52px 20px;text-align:center">
              <div style="position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(140% 90% at 50% 0%, rgba(57,183,236,.09), rgba(57,183,236,0) 60%)"></div>
              <div style="position:relative">
                <h2 style="margin:0 0 10px 0;font-size:26px;font-weight:800;color:#FFFFFF">${h}</h2>
                <p style="margin:0 0 22px 0;font-size:14.5px;line-height:1.6;color:rgba(255,255,255,.78);font-weight:500">${sub}</p>
                <a href="#" style="display:block;text-align:center;background:${C.blue};color:#FFFFFF;font-weight:700;font-size:16px;padding:15px 0;border-radius:12px;margin-bottom:10px">${cta||'Get a Free Quote'}</a>
                <a href="#" style="display:block;text-align:center;border:1.5px solid rgba(255,255,255,.25);color:#FFFFFF;font-weight:700;font-size:15px;padding:14px 0;border-radius:12px">Call 754-276-1601</a>
              </div>
            </div>`;
}
function mMapFooter(){
  return `<div style="position:relative;height:190px;background-image:linear-gradient(rgba(67,109,165,.08) 1px, transparent 1px),linear-gradient(90deg, rgba(67,109,165,.08) 1px, transparent 1px);background-size:36px 36px;background-color:#E8EFF6">
              <div style="position:absolute;left:50%;top:42%;transform:translate(-50%,-50%);display:flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%;background:${C.cyan};box-shadow:0 8px 20px rgba(57,183,236,.45)"><div style="width:9px;height:9px;border-radius:50%;background:#FFFFFF"></div></div>
              <div style="position:absolute;left:16px;right:16px;bottom:14px;background:#FFFFFF;border:1px solid ${C.line};border-radius:12px;padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <div style="font-size:12.5px;line-height:1.5;color:${C.ink};font-weight:600">6630 Meade Street, Hollywood, FL 33024</div>
                <a href="#" style="font-size:12.5px;font-weight:800;color:${C.blue};flex-shrink:0;margin-left:12px">Directions →</a>
              </div>
            </div>
            <div style="background:${C.navy};padding:36px 20px 90px 20px">
              <div style="font-weight:800;font-size:16px;margin-bottom:10px"><span style="color:#FFFFFF">Memory</span> <span style="color:${C.cyan}">Converter</span></div>
              <div style="font-size:13px;line-height:1.7;color:rgba(255,255,255,.65);font-weight:500;margin-bottom:14px">6630 Meade Street, Hollywood, FL 33024<br>754-276-1601</div>
              <div style="display:flex;gap:12px;margin-bottom:18px">
                <a href="#" style="font-size:12.5px;font-weight:700;color:rgba(255,255,255,.6)">Facebook</a>
                <a href="#" style="font-size:12.5px;font-weight:700;color:rgba(255,255,255,.6)">Yelp</a>
                <a href="#" style="font-size:12.5px;font-weight:700;color:rgba(255,255,255,.6)">Instagram</a>
              </div>
              <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px">${stars(12)}<span style="font-size:12px;font-weight:700;color:rgba(255,255,255,.7)">5.0 Google & Yelp</span></div>
              <div style="font-size:12px;font-weight:600;color:rgba(255,255,255,.4);margin-top:16px">© 2026 Memory Converter · Hollywood, FL</div>
            </div>`;
}
const mHolder=(h,label,dark)=>`<div style="display:flex;align-items:center;justify-content:center;height:${h};border-radius:14px;${dark?`background:repeating-linear-gradient(45deg, rgba(57,183,236,.08) 0px, rgba(57,183,236,.08) 10px, rgba(57,183,236,0) 10px, rgba(57,183,236,0) 20px),#1E3A5C`:`background:repeating-linear-gradient(45deg, rgba(67,109,165,.10) 0px, rgba(67,109,165,.10) 10px, rgba(67,109,165,0) 10px, rgba(67,109,165,0) 20px),#E4EDF6`}"><span style="font-family:ui-monospace,monospace;font-size:11px;letter-spacing:.05em;color:${dark?'rgba(255,255,255,.6)':'#5B7188'}">${label}</span></div>`;

// ---------- page wrapper ----------
function page(o){
  const props = JSON.stringify({filmGrain:{editor:'boolean',default:true,tsType:'boolean',section:'Style'},showMobile:{editor:'boolean',default:true,tsType:'boolean',section:'Canvas'}}).replace(/&/g,'&amp;').replace(/"/g,'&quot;');
  return `<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../support.js"><\/script>
</head>
<body>
<x-dc>
<helmet>
<meta name="design_doc_mode" content="canvas">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  body { margin: 0; background: #E9EDF3; font-family: 'Manrope', 'Helvetica Neue', sans-serif; color: #34495E; }
  a { color: #39B7EC; text-decoration: none; }
  a:hover { color: #436DA5; }
  ::selection { background: rgba(57,183,236,.25); }
</style>
</helmet>

<section style="padding:40px 48px 96px 48px">
  <div style="display:flex;align-items:baseline;gap:14px;margin:0 0 32px 4px;flex-wrap:wrap">
    <div style="background:#16324F;color:#FFFFFF;font-weight:800;font-size:13px;padding:6px 12px;border-radius:8px">${o.badge}</div>
    <div style="font-weight:800;font-size:20px;color:#16324F">${o.title}</div>
    <div style="font-size:13px;color:#64748B;font-weight:500">${o.url} · direction 1a Archive Classic</div>
    <a href="Sitemap.dc.html" style="font-size:13px;font-weight:800;color:#436DA5">← all pages</a>
  </div>
  <div style="display:flex;gap:40px;align-items:flex-start">
    <div style="display:flex;flex-direction:column;gap:10px">
      <div style="font-family:ui-monospace,monospace;font-size:12px;color:#8296AB;letter-spacing:.05em">desktop · 1440</div>
      <div data-screen-label="${o.title} — Desktop" style="width:1440px;background:#FFFFFF;border:1px solid #D6DEE9;border-radius:12px;overflow:hidden;box-shadow:0 24px 60px rgba(22,50,79,.12)">
${o.desktop}
      </div>
    </div>
    <sc-if value="{{ showMobile }}" hint-placeholder-val="{{ true }}">
    <div style="display:flex;flex-direction:column;gap:10px">
      <div style="font-family:ui-monospace,monospace;font-size:12px;color:#8296AB;letter-spacing:.05em">mobile · 390</div>
      <div data-screen-label="${o.title} — Mobile" style="position:relative;width:390px;background:#FFFFFF;border:1px solid #D6DEE9;border-radius:12px;overflow:hidden;box-shadow:0 24px 60px rgba(22,50,79,.12)">
${o.mobile}
      </div>
    </div>
    </sc-if>
  </div>
</section>
</x-dc>
<script type="text/x-dc" data-dc-script data-props="${props}">
class Component extends DCLogic {
  renderVals() {
    return {
      grain: this.props.filmGrain ?? true,
      showMobile: this.props.showMobile ?? true
    };
  }
}
<\/script>
</body>
</html>`;
}

return {C, ic, stars, holder, mHolder, grain, dHeader, dCrumb, dTrust, dHow, dReviews, dFAQ, dAreas, dLMcross, dCTA, dMap, dFooter, beforeAfter, svcHero, sectionHead, formatChip, getItem, priceTable, vsTable, mHeader, mCrumb, mSticky, mHero, mTrustChips, mRow, mHow, mReviews, mFAQ, mLM, mCTA, mMapFooter, page};
})();
