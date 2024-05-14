'use client'
Header
import React, { useState } from 'react';
import Header from './Components/Header/Header';
import Footer from './Components/Footer/Footer';

export default function Home() {
  const [currentIndex, setCurrentIndex] = useState(1);
  const images = [
    { url: 'https://images.unsplash.com/photo-1554310603-d39d43033735?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHMlQzMlQTlvdWwlMjBrb3JlYXxlbnwwfHwwfHx8Mg%3D%3D', text: 'Séoul, Corée. Venez découvrir cette ville fascinante, mélange de modernité et de passé' },
    { url: 'https://images.unsplash.com/photo-1539768942893-daf53e448371?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZWd5cHRlfGVufDB8fDB8fHwy', text: 'Gizeh, Egypte. Au départ de Gizeh ou vous découvrirez les magnifiques pyramides, embarquez dans un voyage éternel' },
    { url: 'https://images.unsplash.com/photo-1519112232436-9923c6ba3d26?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dmVuaXNlfGVufDB8fDB8fHwy', text: 'Venise, Italie. Venez goûter à la dolce vita dans cette magnifique ville' },
    { url: 'https://images.unsplash.com/photo-1433757741270-94a3bcadc2f3?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8b3NsbyUyMG5vcnYlQzMlQThnZXxlbnwwfHwwfHx8Mg%3D%3D', text: 'Oslo, Norvège. Oslo, ville hors du temps. Venez découvrir cette merveilleuse ville' },
    { url: 'https://images.unsplash.com/photo-1626085263072-d503e3dea011?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8c2V5Y2hlbGxlc3xlbnwwfHwwfHx8Mg%3D%3D', text: 'Ile des Seychelles. Le soleil, la plage, le sable fin, la douce vie. Rien de plus.' }
  ];

  const back = () => {
    if (currentIndex > 1) {
      setCurrentIndex(currentIndex - 1);
    }
  };

  const next = () => {
    if (currentIndex < images.length) {
      setCurrentIndex(currentIndex + 1);
    } else {
      setCurrentIndex(1); 
    }
  };

  return (
    <main >
     <Header></Header>
      <article className="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
        <div className="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
          <span>{currentIndex}</span>/
          <span>{images.length}</span>
        </div>

        {images.map((imageObj, index) => (
          <figure key={index} className={`h-96 ${currentIndex === index + 1? '' : 'hidden'}`}>
            <img src={imageObj.url} alt="Image" className="absolute inset-0 z-10 h-full w-full object-cover object-firopacity-70" />
            <figcaption className="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
              {imageObj.text}
            </figcaption>
          </figure>
        ))}

        <button onClick={back} className="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
          {/* SVG icon for back button */}
        </button>

        <button onClick={next} className="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        </button>
      </article>
      <Footer/>
    </main>
  );
      
}
