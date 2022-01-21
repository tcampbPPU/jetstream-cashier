module.exports = {
  extends: [
    // 'eslint:recommended',
    'plugin:vue/recommended',
  ],
  rules: {
    'comma-dangle': ['error', 'always-multiline'],
    'curly': ['error', 'multi'],
    'no-console': 'off',
    'no-debugger': 'off',
    'vue/require-default-prop': 'off',
    'vue/singleline-html-element-content-newline': 0,
    'camelcase': 'off',
    'no-case-declarations': 'off',
    'no-use-before-define': 'off',
    'no-useless-constructor': 'off',
    'vue/no-v-html': 'off',
    'quotes': [2, 'single', { 'avoidEscape': true }],
    'semi': ['error', 'never'],
  },
  parserOptions: {
    parser: '@typescript-eslint/parser',
  },
}
