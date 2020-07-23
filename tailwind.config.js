// tailwind.config.js
module.exports = {
    theme: {
        customForms: theme => ({
            default: {
                input: {
                    "&:focus": {
                        borderColor: theme("colors.teal.400"),
                        boxShadow: undefined
                    }
                },
                select: {
                    "&:focus": {
                        borderColor: theme("colors.teal.400"),
                        boxShadow: undefined
                    }
                },
                textarea: {
                    "&:focus": {
                        borderColor: theme("colors.teal.400"),
                        boxShadow: undefined
                    }
                }
            }
        })
    },
    plugins: [require("@tailwindcss/custom-forms")]
};
