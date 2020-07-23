// tailwind.config.js
module.exports = {
    theme: {
        customForms: theme => ({
            default: {
                input: {
                    "&:focus": {
                        borderColor: theme("colors.teal.400"),
                        boxShadow: "0 0 0 2px rgba(79, 209, 197, 0.5)"
                    }
                },
                select: {
                    "&:focus": {
                        borderColor: theme("colors.teal.400"),
                        boxShadow: "0 0 0 2px rgba(79, 209, 197, 0.5)"
                    }
                },
                textarea: {
                    "&:focus": {
                        borderColor: theme("colors.teal.400"),
                        boxShadow: "0 0 0 2px rgba(79, 209, 197, 0.5)"
                    }
                }
            }
        })
    },
    plugins: [require("@tailwindcss/custom-forms")]
};
