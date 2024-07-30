import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                arkaplan: "#CF161C",
                gradient: "#FFFFFF00",
                hover: "#FFFAF0",
                border: "#D9D9D9",
                texthover: "#980C10",
                detay: "#DEDEDE",
                copySecond: "95989A",
            },
            fontSize: {
                "202px": "202px",
                "18px": "18px",
                "40px": "40px",
                "12px": "12px",
                "24px": "24px",
                "16px": "16px",
                "4px": "4px",
                "8px": "8px",
                "6px": "6px",
                "14px": "14px",
            },
            zIndex: {
                100: "100",
                90: "90",
                80: "80",
                70: "70",
                150: "150",
            },
            spacing: {
                "292px": "292px",
                "194px": "194px",
                "790px": "790px",
                "409px": "409px",
                "1326px": "1326px",
                "594px": "594px",
                "202px": "202px",
                "241px": "241px",
                "61px": "61px",
                "1295px": "1295px",
                "220px": "220px",
                "625px": "625px",
                "339px": "339px",
                "125px": "125px",
                "30px": "30px",
            },
            fontFamily: {
                abril: ['"Abril Fatface"', "serif"],
                poppins: ['"Poppins"', "sans-serif"],
            },
        },
    },

    plugins: [forms],
};
