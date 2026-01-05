 // TIMER
        const countdownDate = new Date().getTime() + (2 * 24 * 60 * 60 * 1000);
        setInterval(function() {
            const now = new Date().getTime();
            const distance = countdownDate - now;
            document.getElementById("days").innerHTML = Math.floor(distance / (1000 * 60 * 60 * 24));
            document.getElementById("hours").innerHTML = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            document.getElementById("mins").innerHTML = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            document.getElementById("secs").innerHTML = Math.floor((distance % (1000 * 60)) / 1000);
        }, 1000);

        // CONFETTI
        function copyCoupon(code, element) {
            navigator.clipboard.writeText(code);
            confetti({
                particleCount: 100,
                spread: 70,
                origin: {
                    y: 0.8
                },
                colors: ['#ff85a1', '#a18cd1', '#ffffff']
            });
            const original = element.innerText;
            element.innerText = "COPIED ✨";
            setTimeout(() => {
                element.innerText = original;
            }, 2000);
        }
        const prizes = [{
                label: "10% OFF",
                code: "LUCKY10"
            },
            {
                label: "FREE GIFT",
                code: "GIFTME"
            },
            {
                label: "₹500 OFF",
                code: "SAVE500"
            },
            {
                label: "20% OFF",
                code: "PASTEL20"
            },
            {
                label: "BOGO",
                code: "FREEONE"
            },
            {
                label: "90% OFF",
                code: "JACKPOT90"
            }
        ];

        // Generate Wheel Segments
        const wheel = document.getElementById('mainWheel');
        const colors = ['#ff85a1', '#a18cd1', '#ffb8b8', '#6c5ce7', '#fab1a0', '#fd79a8'];

        prizes.forEach((p, i) => {
            const deg = (360 / prizes.length) * i;
            const segment = document.createElement('div');
            segment.className = 'wheel-segment';
            segment.style.backgroundColor = colors[i];
            segment.style.transform = `rotate(${deg}deg) skewY(-30deg)`;
            segment.innerHTML = `<span style="transform: skewY(30deg) rotate(30deg);">${p.label}</span>`;
            wheel.appendChild(segment);
        });

        let isSpinning = false;

        function startSpin() {
            if (isSpinning) return;
            isSpinning = true;

            const spinBtn = document.getElementById('spinBtn');
            const wheelElement = document.getElementById('mainWheel');
            const randomDeg = Math.floor(5000 + Math.random() * 5000); // 5000-10000 degrees spin

            spinBtn.disabled = true;
            spinBtn.innerText = "SPINNING...";

            wheelElement.style.transform = `rotate(${randomDeg}deg)`;

            setTimeout(() => {
                const actualDeg = randomDeg % 360;
                const prizeIndex = Math.floor(((360 - actualDeg) % 360) / (360 / prizes.length));
                const finalPrize = prizes[prizeIndex];

                // Confetti
                confetti({
                    particleCount: 150,
                    spread: 100,
                    origin: {
                        y: 0.5
                    }
                });

                // UI Updates
                document.getElementById('wheelSection').style.display = 'none';
                const resSec = document.getElementById('resultSection');
                resSec.style.display = 'block';
                document.getElementById('wonPrize').innerText = finalPrize.label;
                document.getElementById('wonCode').innerText = finalPrize.code;

                isSpinning = false;
            }, 4000);
        }

        // Reset modal when closed
        document.getElementById('spinModal').addEventListener('hidden.bs.modal', function() {
            document.getElementById('wheelSection').style.display = 'block';
            document.getElementById('resultSection').style.display = 'none';
            document.getElementById('mainWheel').style.transform = 'rotate(0deg)';
            document.getElementById('spinBtn').disabled = false;
            document.getElementById('spinBtn').innerText = "SPIN NOW";
        });

        function addToBagAnimation(productName) {
            const toast = document.getElementById('cartToast');
            const nameEl = document.getElementById('toastProductName');

            // Set Product Name
            nameEl.innerText = productName;

            // Show Toast with Animation
            toast.style.display = 'flex';
            toast.classList.remove('animate__fadeOutRight');
            toast.classList.add('animate__fadeInRight');

            // Confetti burst for aesthetic feel
            confetti({
                particleCount: 40,
                spread: 50,
                origin: {
                    x: 0.9,
                    y: 0.1
                }, // Top right corner burst
                colors: ['#ff85a1', '#a18cd1']
            });

            // Hide after 3 seconds
            setTimeout(() => {
                toast.classList.remove('animate__fadeInRight');
                toast.classList.add('animate__fadeOutRight');
                setTimeout(() => {
                    toast.style.display = 'none';
                }, 500); // Wait for fadeOut animation
            }, 3000);
        }
        function initScratch() {
    const canvas = document.getElementById('scratchCanvas');
    const ctx = canvas.getContext('2d');
    let isDrawing = false;

    // Fill with a nice aesthetic pattern/color
    ctx.fillStyle = '#e2d1c3'; // Pastel Beige
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    // Add some "Aesthetic Text" on top of scratch layer
    ctx.fillStyle = '#8e7f7f';
    ctx.font = '20px Inter';
    ctx.textAlign = 'center';
    ctx.fillText('SCRATCH TO REVEAL', canvas.width/2, canvas.height/2 + 7);

    function scratch(e) {
        if (!isDrawing) return;
        const rect = canvas.getBoundingClientRect();
        const x = (e.clientX || e.touches[0].clientX) - rect.left;
        const y = (e.clientY || e.touches[0].clientY) - rect.top;

        ctx.globalCompositeOperation = 'destination-out';
        ctx.beginPath();
        ctx.arc(x, y, 25, 0, Math.PI * 2);
        ctx.fill();
    }

    canvas.addEventListener('mousedown', () => isDrawing = true);
    canvas.addEventListener('touchstart', () => isDrawing = true);
    window.addEventListener('mouseup', () => isDrawing = false);
    window.addEventListener('touchend', () => isDrawing = false);
    canvas.addEventListener('mousemove', scratch);
    canvas.addEventListener('touchmove', scratch);
}

// Start scratch on load
document.addEventListener('DOMContentLoaded', initScratch);