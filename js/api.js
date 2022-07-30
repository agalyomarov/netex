const getPrice = async function(ticker) {
    const res = await fetch(
        "https://www.binance.com/api/v3/ticker/price?symbol=" + ticker
    );

    const data = await res.json();
    return await data;
};