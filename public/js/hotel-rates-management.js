// Save hotel rates to the server (PHP)
document.getElementById('save-rates').addEventListener('click', function() {
    const rates = {
        // Makkah Hotels
        'FAIRMONT': document.getElementById('fairmont-rate').value,
        'SWISSOTEL': document.getElementById('swissotel-rate').value,
        'SWISS_AL_MAQAM': document.getElementById('swiss-almaqam-rate').value,
        'MERIOT': document.getElementById('meriot-rate').value,
        'MAKKAH_TOWER': document.getElementById('makkah-tower-rate').value,
        'SHERATON': document.getElementById('sheraton-rate').value,
        'NAWARA_SHAMS_1': document.getElementById('nawar-shams1-rate').value,
        'NAWARA_SHAMS_2': document.getElementById('nawar-shams2-rate').value,
        'LE_MERIDIEN': document.getElementById('le-meridien-rate').value,
        'EMAAR_ANDALUSIA': document.getElementById('emaar-andlusia-rate').value,
        'BADAR_AL_MASA': document.getElementById('badar-almasa-rate').value,
        'EMAAR_AL_AREEJ': document.getElementById('emaar-alareej-rate').value,
        'EMAAR_AL_KHALIL': document.getElementById('emaar-alkhalil-rate').value,
        'VOCO': document.getElementById('voco-rate').value,
        'RUSHD_AL_MAJAD': document.getElementById('rushd-almajad-rate').value,
        'DIWAN_AL_BAIT': document.getElementById('diwn-albait-rate').value,
        'MAAREM_AL_HJRA': document.getElementById('maarem-alhjra-rate').value,
        'KISWA': document.getElementById('kiswa-rate').value,
        'JOHRA_MAJD': document.getElementById('johra-majd-rate').value,
        'MANARA_BADAYA': document.getElementById('manara-badaya-rate').value,
        'MANAZIL_AL_FATEH': document.getElementById('manazil-alfateh-rate').value,
        'MATOOQ_AL_QARI': document.getElementById('matooq-alqari-rate').value,

        // Madinah Hotels
        'ANWAR_AL_MADINAH_MOVENPICK': document.getElementById('anwar-move-n-pic-rate').value,
        'SAJA_AL_MADINAH': document.getElementById('saja-almadinah-rate').value,
        'UTHMAN_BIN_AFFAN': document.getElementById('uthman-binaffan-rate').value,
        'SWISS_INTERNATIONAL': document.getElementById('swiss-int-rate').value,
        'GRAND_ZOWAR': document.getElementById('grand-zowar-rate').value,
        'WARTA_AL_MADINAH': document.getElementById('warta-almadinah-rate').value,
        'MUKHTARA_INTERNATIONAL': document.getElementById('mukhtara-int-rate').value,
        'EMAAR_TAIBA': document.getElementById('emaar-taiba-rate').value,
        'BIR_AL_EIMAN': document.getElementById('bir-aleiman-rate').value,
        'WARDA_SAFA': document.getElementById('warda-safa-rate').value,
        'ERGWAN_AL_MADINAH': document.getElementById('ergwan-almadinah-rate').value,
        'SAIF_AL_MAJD': document.getElementById('saif-almajd-rate').value,
        'KARAM_AJYAL': document.getElementById('karam-ajyal-rate').value,
        'NAJOOM_AL_MADINAH': document.getElementById('najoom-almadinah-rate').value,
        'DREAM_MADINAH': document.getElementById('dream-madinah-rate').value,
        'DREAM_MADINAH_3': document.getElementById('dream-madinah3-rate').value,
        'MANAZIL_MARJAN': document.getElementById('manazil-marjan-rate').value
    };

    // Send rates to the server using a POST request
    fetch('saveRates.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(rates)
    })
    .then(response => response.text())
    .then(data => {
        alert('Rates saved successfully!');
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Load hotel rates from the server (PHP) on page load
window.onload = function() {
    fetch('loadRates.php')
        .then(response => response.json())
        .then(savedRates => {
            if (savedRates) {
                // Makkah Hotels
                document.getElementById('fairmont-rate').value = savedRates.FAIRMONT || '';
                document.getElementById('swissotel-rate').value = savedRates.SWISSOTEL || '';
                document.getElementById('swiss-almaqam-rate').value = savedRates.SWISS_AL_MAQAM || '';
                document.getElementById('meriot-rate').value = savedRates.MERIOT || '';
                document.getElementById('makkah-tower-rate').value = savedRates.MAKKAH_TOWER || '';
                document.getElementById('sheraton-rate').value = savedRates.SHERATON || '';
                document.getElementById('nawar-shams1-rate').value = savedRates.NAWARA_SHAMS_1 || '';
                document.getElementById('nawar-shams2-rate').value = savedRates.NAWARA_SHAMS_2 || '';
                document.getElementById('le-meridien-rate').value = savedRates.LE_MERIDIEN || '';
                document.getElementById('emaar-andlusia-rate').value = savedRates.EMAAR_ANDALUSIA || '';
                document.getElementById('badar-almasa-rate').value = savedRates.BADAR_AL_MASA || '';
                document.getElementById('emaar-alareej-rate').value = savedRates.EMAAR_AL_AREEJ || '';
                document.getElementById('emaar-alkhalil-rate').value = savedRates.EMAAR_AL_KHALIL || '';
                document.getElementById('voco-rate').value = savedRates.VOCO || '';
                document.getElementById('rushd-almajad-rate').value = savedRates.RUSHD_AL_MAJAD || '';
                document.getElementById('diwn-albait-rate').value = savedRates.DIWAN_AL_BAIT || '';
                document.getElementById('maarem-alhjra-rate').value = savedRates.MAAREM_AL_HJRA || '';
                document.getElementById('kiswa-rate').value = savedRates.KISWA || '';
                document.getElementById('johra-majd-rate').value = savedRates.JOHRA_MAJD || '';
                document.getElementById('manara-badaya-rate').value = savedRates.MANARA_BADAYA || '';
                document.getElementById('manazil-alfateh-rate').value = savedRates.MANAZIL_AL_FATEH || '';
                document.getElementById('matooq-alqari-rate').value = savedRates.MATOOQ_AL_QARI || '';

                // Madinah Hotels
                document.getElementById('anwar-move-n-pic-rate').value = savedRates.ANWAR_AL_MADINAH_MOVENPICK || '';
                document.getElementById('saja-almadinah-rate').value = savedRates.SAJA_AL_MADINAH || '';
                document.getElementById('uthman-binaffan-rate').value = savedRates.UTHMAN_BIN_AFFAN || '';
                document.getElementById('swiss-int-rate').value = savedRates.SWISS_INTERNATIONAL || '';
                document.getElementById('grand-zowar-rate').value = savedRates.GRAND_ZOWAR || '';
                document.getElementById('warta-almadinah-rate').value = savedRates.WARTA_AL_MADINAH || '';
                document.getElementById('mukhtara-int-rate').value = savedRates.MUKHTARA_INTERNATIONAL || '';
                document.getElementById('emaar-taiba-rate').value = savedRates.EMAAR_TAIBA || '';
                document.getElementById('bir-aleiman-rate').value = savedRates.BIR_AL_EIMAN || '';
                document.getElementById('warda-safa-rate').value = savedRates.WARDA_SAFA || '';
                document.getElementById('ergwan-almadinah-rate').value = savedRates.ERGWAN_AL_MADINAH || '';
                document.getElementById('saif-almajd-rate').value = savedRates.SAIF_AL_MAJD || '';
                document.getElementById('karam-ajyal-rate').value = savedRates.KARAM_AJYAL || '';
                document.getElementById('najoom-almadinah-rate').value = savedRates.NAJOOM_AL_MADINAH || '';
                document.getElementById('dream-madinah-rate').value = savedRates.DREAM_MADINAH || '';
                document.getElementById('dream-madinah3-rate').value = savedRates.DREAM_MADINAH_3 || '';
                document.getElementById('manazil-marjan-rate').value = savedRates.MANAZIL_MARJAN || '';
            }
        })
        .catch(error => console.error('Error loading rates:', error));
};