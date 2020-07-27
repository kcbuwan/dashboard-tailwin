// tailwind.config.js
module.exports = {
    theme: {
        customForms: theme => ({
            default: {
                "input, textarea, multiselect, select, checkbox, radio": {
                    "&:focus": {
                        borderColor: theme("colors.teal.400"),
                        boxShadow: "0 0 0 2px rgba(79, 209, 197, 0.5)"
                    }
                },

                "checkbox, radio": {
                    borderColor: theme("colors.teal.400"),
                    color: theme("colors.teal.500")
                }
            }
        })
    },
    plugins: [require("@tailwindcss/custom-forms")]
};
