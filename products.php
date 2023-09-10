 <style>
.cardsParnet {
    display: grid;
    grid-template-columns: auto auto auto;
    gap: 2rem;
    place-items: center;
}

.card {
    width: 18rem;
    min-height: 26rem;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 6px 1px 25px -4px black;
    border-radius: 12px;
}

.card img {
    width: 80%;
    height: 75%;
    object-fit: contain;
}

.card p {
    padding: 10px;
    text-align: center;
    font-size: 1.2rem;
    font-weight: 500;
}

@media (max-width: 425px) {
    html {
        font-size: 10px;
    }

    .title {
        letter-spacing: 0;
    }

    .cardsParnet {
        grid-template-columns: auto;
    }
}

@media (min-width: 426px) and (max-width: 768px) {
    html {
        font-size: 12px;
    }

    .title {
        letter-spacing: 0;
    }

    .cardsParnet {
        grid-template-columns: auto auto;
    }
}

@media (min-width: 1740px) {
    html {
        font-size: 17px;
    }

    .cardsParnet {
        grid-template-columns: auto auto auto auto;
    }
}
 </style>

 <div className="cardsParnet">
     <div className="card" key={index}>
         <img src="" alt="Product" />
         <p>{product.title}</p>
         <p>
             <span style='color:#900C3F'>Price </span>:
         </p>
         <p>
             <span style='color:#900C3F'>Category </span>
         </p>
     </div>
 </div>