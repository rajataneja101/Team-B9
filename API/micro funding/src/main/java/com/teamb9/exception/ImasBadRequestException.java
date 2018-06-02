package com.teamb9.exception;


public final class ImasBadRequestException extends RuntimeException {

    /**
	 * 
	 */
	private static final long serialVersionUID = -5769566799057100003L;

	public ImasBadRequestException() {
        super();
    }

    public ImasBadRequestException(final String message, final Throwable cause) {
        super(message, cause);
    }

    public ImasBadRequestException(final String message) {
        super(message);
    }

    public ImasBadRequestException(final Throwable cause) {
        super(cause);
    }

}